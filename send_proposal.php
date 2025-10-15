<?php
// send_proposal.php

// Enable error reporting for development (disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Helper: sanitize input
function sanitize($val) {
    if (is_array($val)) {
        return array_map('sanitize', $val);
    }
    return htmlspecialchars(trim($val), ENT_QUOTES, 'UTF-8');
}

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
    exit;
}

// Gather inputs
$name    = sanitize($_POST['name'] ?? '');
$phone   = sanitize($_POST['phone'] ?? '');
$email   = sanitize($_POST['email'] ?? '');
$website = sanitize($_POST['website'] ?? '');
$company = sanitize($_POST['company'] ?? '');
$services = $_POST['services'] ?? []; // raw array, do not sanitize yet
$message = sanitize($_POST['message'] ?? '');
$not_robot = isset($_POST['not_robot']) ? (int)$_POST['not_robot'] : 0;

// Basic validation
$errors = [];

// Required fields
if (empty($name)) $errors[] = 'Name is required';
if (empty($phone)) $errors[] = 'Phone is required';
if (empty($email)) $errors[] = 'Email is required';
if (empty($not_robot)) $errors[] = 'Please confirm you are not a robot';

// Optional: very basic email format check
if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}

// If there are errors, return
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'errors' => $errors]);
    exit;
}

// Normalize services
$servicesList = [];
if (is_array($services)) {
    foreach ($services as $s) {
        $s = trim($s);
        if ($s !== '') $servicesList[] = $s;
    }
}
$servicesStr = implode(', ', $servicesList);

// Email details
$to = 'contact@oceandigitech.com'; // <- replace with actual recipient
$subject = 'New Proposal from ' . $name;

// HTML Email Template (div-based, inline CSS)
// This is the template that will be sent as the email body.
// It uses the PHP variables from above. Ensure proper escaping.
$htmlBody = '
<div style="font-family: Arial, Helvetica, sans-serif; color:#333; line-height:1.5; font-size:14px; padding:0 0 12px;">
  <div style="max-width:650px; margin:0 auto; border-radius:8px; overflow:hidden;">
    <!-- header stripe -->
    <div style="background: #d90060; height:64px; border-top-left-radius:8px; border-top-right-radius:8px; display:flex; align-items:center; justify-content:space-between; padding:0 20px; color:white;">
      <span style="font-size:20px; font-weight:700;">Proposal Request</span>
      <span style="font-size:12px; opacity:.95;"> Ocean DigiTech </span>
    </div>

    <!-- content block -->
    <div style="background:#fff; padding:22px 26px; border:1px solid #eee; border-top:none;">
      <h2 style="margin:0 0 12px; font-size:18px; color:#333; font-weight:700;">Proposal Details</h2>

      <table cellpadding="6" cellspacing="0" style="width:100%; border-collapse:separate; border-spacing:0 8px;">
        <tr>
          <td style="width:180px; font-weight:600; color:#555;">Name</td>
          <td style="color:#333;">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555;">Phone</td>
          <td style="color:#333;">' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555;">Email</td>
          <td style="color:#333;">
            <a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '" style="color:#1a0dab; text-decoration:underline;">
              ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '
            </a>
          </td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555;">Website</td>
          <td style="color:#333;">
            <a href="' . htmlspecialchars($website, ENT_QUOTES, 'UTF-8') . '" style="color:#1a0dab; text-decoration:underline;" target="_blank" rel="noopener">
              ' . htmlspecialchars($website, ENT_QUOTES, 'UTF-8') . '
            </a>
          </td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555;">Company</td>
          <td style="color:#333;">' . htmlspecialchars($company, ENT_QUOTES, 'UTF-8') . '</td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555; vertical-align:top;">Services</td>
          <td style="color:#333;">' . htmlspecialchars($servicesStr, ENT_QUOTES, 'UTF-8') . '</td>
        </tr>
        <tr>
          <td style="width:180px; font-weight:600; color:#555; vertical-align:top;">Message</td>
          <td style="color:#333;">' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</td>
        </tr>
      </table>

      <hr style="border:0; border-top:1px solid #eee; margin:18px 0;">
      <p style="margin:0; color:#777; font-size:12px;">
        This is an automatically generated proposal request. If you have questions, reply to the sender\'s email.
      </p>
    </div>
  </div>
</div>';

// Headers for HTML email
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Send mail - option 1: mail() (built-in)
$sent = false;
if (function_exists('mail')) {
    $sent = mail($to, $subject, $htmlBody, $headers);
}

// Option 2: PHPMailer (if you have PHPMailer installed via Composer)
// Uncomment this block if you prefer PHPMailer
/*
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    //Server settings
    // $mail->isSMTP();
    // $mail->Host = 'smtp.yourprovider.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'your_username';
    // $mail->Password = 'your_password';
    // $mail->SMTPSecure = 'tls';
    // $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress($to);

    $mail->Subject = $subject;
    $mail->Body    = $htmlBody;
    $mail->isHTML(true);
    $mail->send();
    $sent = true;
} catch (Exception $e) {
    $sent = false;
}
*/

// Response
if ($sent) {
    echo json_encode(['status' => 'success', 'message' => 'Proposal submitted successfully']);
} else {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Please try again later.']);
}
?>
