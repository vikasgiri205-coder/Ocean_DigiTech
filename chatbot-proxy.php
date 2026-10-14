<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

function od_respond(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES);
    exit;
}

function od_read_message(): string
{
    if (isset($_POST['message']) && is_string($_POST['message'])) {
        return trim($_POST['message']);
    }

    $rawInput = file_get_contents('php://input');
    if ($rawInput === false || $rawInput === '') {
        return '';
    }

    $decoded = json_decode($rawInput, true);
    if (json_last_error() === JSON_ERROR_NONE && isset($decoded['message']) && is_string($decoded['message'])) {
        return trim($decoded['message']);
    }

    return '';
}

function od_extract_output($payload): string
{
    if (is_string($payload)) {
        return trim($payload);
    }

    if (is_array($payload)) {
        if (isset($payload['output']) && is_string($payload['output'])) {
            return trim($payload['output']);
        }

        if (isset($payload['message']) && is_string($payload['message'])) {
            return trim($payload['message']);
        }

        if (isset($payload[0])) {
            $nested = od_extract_output($payload[0]);
            if ($nested !== '') {
                return $nested;
            }
        }

        foreach ($payload as $value) {
            $nested = od_extract_output($value);
            if ($nested !== '') {
                return $nested;
            }
        }
    }

    return '';
}

$message = od_read_message();

if ($message === '') {
    od_respond(400, ['error' => 'Message is required']);
}

// For a live website, n8n should use the production webhook URL, not webhook-test.
$webhookUrl = getenv('OD_CHATBOT_WEBHOOK_URL') ?: 'https://learnn8nwithamy.app.n8n.cloud/webhook/chatbot';
$headers = [
    'Content-Type: application/json',
    'Accept: application/json, text/plain;q=0.9, */*;q=0.8',
];

$headerName = getenv('OD_CHATBOT_HEADER_NAME');
$headerValue = getenv('OD_CHATBOT_HEADER_VALUE');
if ($headerName && $headerValue) {
    $headers[] = $headerName . ': ' . $headerValue;
}

$requestBody = json_encode(['message' => $message], JSON_UNESCAPED_SLASHES);
if ($requestBody === false) {
    od_respond(500, ['error' => 'Failed to encode request']);
}

$responseBody = '';
$httpCode = 0;

if (function_exists('curl_init')) {
    $ch = curl_init($webhookUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => $requestBody,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 10,
    ]);

    $responseBody = curl_exec($ch);
    if ($responseBody === false) {
        $curlError = curl_error($ch);
        error_log('Chatbot proxy cURL failure: ' . $curlError);
        od_respond(502, ['error' => 'Webhook request failed', 'details' => $curlError]);
    }

    $httpCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
} else {
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => implode("\r\n", $headers),
            'content' => $requestBody,
            'timeout' => 30,
            'ignore_errors' => true,
        ],
    ]);

    $responseBody = file_get_contents($webhookUrl, false, $context);
    if ($responseBody === false) {
        error_log('Chatbot proxy stream request failed');
        od_respond(502, ['error' => 'Webhook request failed']);
    }

    $responseHeaders = function_exists('http_get_last_response_headers')
        ? http_get_last_response_headers()
        : [];

    if (isset($responseHeaders[0]) && preg_match('/\s(\d{3})\s/', $responseHeaders[0], $matches)) {
        $httpCode = (int) $matches[1];
    }
}

if ($httpCode >= 400) {
    error_log('Chatbot proxy upstream error: HTTP ' . $httpCode . ' body=' . substr(trim($responseBody), 0, 1000));
    od_respond(502, [
        'error' => 'Webhook returned an error',
        'status' => $httpCode,
        'details' => trim($responseBody),
    ]);
}

$decodedResponse = json_decode($responseBody, true);
$output = json_last_error() === JSON_ERROR_NONE
    ? od_extract_output($decodedResponse)
    : trim($responseBody);

if ($output === '') {
    $output = 'Sorry, I could not understand that response.';
}

echo json_encode(['output' => $output], JSON_UNESCAPED_SLASHES);
