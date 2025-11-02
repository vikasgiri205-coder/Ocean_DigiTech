<?php
// process-audit-form.php - Form submission handler for Free Audit Landing Page

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Set response header to JSON
header('Content-Type: application/json');

// Initialize response array
$response = array(
    'success' => false,
    'message' => ''
);

try {
    // Check if form was submitted via POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // Sanitize and validate input data
    $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $website = filter_input(INPUT_POST, 'website', FILTER_SANITIZE_URL);
    $focusAreas = isset($_POST['focusArea']) ? $_POST['focusArea'] : array();
    $budget = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_STRING);
    $challenge = filter_input(INPUT_POST, 'challenge', FILTER_SANITIZE_STRING);

    // Validate required fields
    if (empty($fullName) || empty($company) || empty($email) || empty($website) || empty($budget) || empty($challenge)) {
        throw new Exception('Please fill in all required fields');
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please provide a valid email address');
    }

    // Validate URL
    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        throw new Exception('Please provide a valid website URL');
    }

    // Validate focus areas
    if (empty($focusAreas)) {
        throw new Exception('Please select at least one focus area');
    }

    // Process focus areas
    $focusAreasText = implode(', ', array_map(function($area) {
        return ucwords(str_replace('_', ' ', $area));
    }, $focusAreas));

    // Determine primary focus for segmentation
    $isPrimaryDevelopment = in_array('development', $focusAreas) || in_array('cloud', $focusAreas);
    $isPrimaryMarketing = in_array('seo', $focusAreas) || in_array('ppc', $focusAreas) || in_array('social', $focusAreas);

    if (in_array('full_audit', $focusAreas)) {
        $segment = 'Full Audit (Marketing + Development)';
    } elseif ($isPrimaryDevelopment && !$isPrimaryMarketing) {
        $segment = 'Development Focus';
    } elseif ($isPrimaryMarketing && !$isPrimaryDevelopment) {
        $segment = 'Marketing Focus';
    } else {
        $segment = 'Mixed (Marketing + Development)';
    }

    // Get user's IP and timestamp
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $timestamp = date('Y-m-d H:i:s');
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';

    // Get referrer for tracking
    $referrer = $_SERVER['HTTP_REFERER'] ?? 'Direct';

    // --- EMAIL NOTIFICATION TO ADMIN ---
    $adminEmail = 'contact@oceandigitech.com'; // Using existing email from send_proposal.php
    $adminSubject = "New Free Audit Request from $fullName ($company)";

    $adminMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; border-radius: 8px; margin-top: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #667eea; }
            .value { margin-top: 5px; padding: 10px; background: white; border-radius: 4px; }
            .segment-badge { display: inline-block; padding: 8px 15px; background: #e80566; color: white; border-radius: 20px; font-weight: bold; }
            .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #999; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🎯 New Free Audit Request</h2>
            </div>

            <div class='content'>
                <div class='field'>
                    <div class='label'>Lead Segment:</div>
                    <div class='value'><span class='segment-badge'>$segment</span></div>
                </div>

                <div class='field'>
                    <div class='label'>Full Name:</div>
                    <div class='value'>$fullName</div>
                </div>

                <div class='field'>
                    <div class='label'>Company:</div>
                    <div class='value'>$company</div>
                </div>

                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'><a href='mailto:$email'>$email</a></div>
                </div>

                <div class='field'>
                    <div class='label'>Website:</div>
                    <div class='value'><a href='$website' target='_blank'>$website</a></div>
                </div>

                <div class='field'>
                    <div class='label'>Focus Areas:</div>
                    <div class='value'>$focusAreasText</div>
                </div>

                <div class='field'>
                    <div class='label'>Monthly Budget:</div>
                    <div class='value'>" . ucwords(str_replace('_', ' ', $budget)) . "</div>
                </div>

                <div class='field'>
                    <div class='label'>Biggest Challenge:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($challenge)) . "</div>
                </div>

                <div class='field'>
                    <div class='label'>Submitted:</div>
                    <div class='value'>$timestamp</div>
                </div>

                <div class='field'>
                    <div class='label'>Source:</div>
                    <div class='value'>$referrer</div>
                </div>

                <div class='field'>
                    <div class='label'>IP Address:</div>
                    <div class='value'>$ipAddress</div>
                </div>
            </div>

            <div class='footer'>
                <p>This lead was generated from the Free Audit Landing Page</p>
                <p>Ocean DigiTech - Lead Generation System</p>
            </div>
        </div>
    </body>
    </html>
    ";

    $adminHeaders = "MIME-Version: 1.0\r\n";
    $adminHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
    $adminHeaders .= "From: $email\r\n";
    $adminHeaders .= "Reply-To: $email\r\n";

    // Send admin notification
    $adminEmailSent = mail($adminEmail, $adminSubject, $adminMessage, $adminHeaders);

    // --- EMAIL TO USER (PERSONALIZED AUDIT PREVIEW) ---
    $userSubject = "Your Free Digital Growth Audit is Being Prepared 🚀";

    $userMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; text-align: center; border-radius: 8px 8px 0 0; }
            .content { background: #ffffff; padding: 30px; border: 1px solid #e5e7eb; }
            .greeting { font-size: 18px; font-weight: bold; margin-bottom: 20px; }
            .section { margin-bottom: 25px; }
            .highlight { background: #fef3c7; padding: 15px; border-left: 4px solid #f59e0b; margin: 20px 0; }
            .cta-button { display: inline-block; background: #e80566; color: white; padding: 15px 30px; text-decoration: none; border-radius: 8px; font-weight: bold; margin: 20px 0; }
            .footer { background: #f9fafb; padding: 20px; text-align: center; border-radius: 0 0 8px 8px; }
            .checklist { list-style: none; padding: 0; }
            .checklist li { padding: 10px 0; border-bottom: 1px solid #e5e7eb; }
            .checklist li:before { content: '✅ '; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>🎉 Thank You, $fullName!</h1>
                <p style='font-size: 18px; margin-top: 10px;'>Your Free Audit Request Has Been Received</p>
            </div>

            <div class='content'>
                <div class='greeting'>
                    Hi $fullName,
                </div>

                <div class='section'>
                    <p>Thank you for requesting your <strong>FREE Digital Growth & Performance Audit</strong>!</p>
                    <p>Our expert team at Ocean DigiTech is now analyzing your information to prepare a comprehensive audit tailored specifically for <strong>$company</strong>.</p>
                </div>

                <div class='highlight'>
                    <strong>📊 What You'll Receive Within 24 Hours:</strong>
                    <ul class='checklist'>
                        <li>Personalized performance analysis for your website</li>
                        <li>Marketing optimization opportunities</li>
                        <li>Technology stack recommendations</li>
                        <li>Competitive benchmarking insights</li>
                        <li>Actionable next steps for growth</li>
                    </ul>
                </div>

                <div class='section'>
                    <strong>Your Audit Focus:</strong> $focusAreasText<br>
                    <strong>Website:</strong> <a href='$website'>$website</a>
                </div>

                <div class='section' style='text-align: center; background: #f0f9ff; padding: 20px; border-radius: 8px;'>
                    <h3 style='color: #667eea; margin-bottom: 10px;'>Want to Fast-Track Your Results?</h3>
                    <p>Book a free 30-minute strategy session with one of our experts</p>
                    <a href='https://calendly.com/oceandigitech/strategy-session' class='cta-button' target='_blank'>
                        📅 Schedule Your Free Consultation
                    </a>
                    <p style='font-size: 13px; color: #666; margin-top: 10px;'>Available in EST & PST time zones</p>
                </div>

                <div class='section'>
                    <p><strong>What happens next?</strong></p>
                    <ol>
                        <li>Our team will analyze your website and digital presence</li>
                        <li>You'll receive your detailed audit report via email within 24 hours</li>
                        <li>Optionally, book a call to discuss your results and next steps</li>
                    </ol>
                </div>

                <div class='section'>
                    <p>Have questions? Simply reply to this email, and our team will get back to you promptly.</p>
                </div>

                <div class='section'>
                    <p>Best regards,<br>
                    <strong>The Ocean DigiTech Team</strong><br>
                    Your Growth Partner in Digital Success</p>
                </div>
            </div>

            <div class='footer'>
                <p style='font-size: 12px; color: #666;'>
                    <strong>Ocean DigiTech</strong><br>
                    Based in India | Serving Businesses Across the USA<br>
                    <a href='https://oceandigitech.com'>www.oceandigitech.com</a>
                </p>
                <div style='margin-top: 15px;'>
                    <a href='#' style='margin: 0 10px; color: #667eea; text-decoration: none;'>LinkedIn</a>
                    <a href='#' style='margin: 0 10px; color: #1877f2; text-decoration: none;'>Facebook</a>
                    <a href='#' style='margin: 0 10px; color: #e1306c; text-decoration: none;'>Instagram</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    $userHeaders = "MIME-Version: 1.0\r\n";
    $userHeaders .= "Content-type: text/html; charset=UTF-8\r\n";
    $userHeaders .= "From: Ocean DigiTech <contact@oceandigitech.com>\r\n";
    $userHeaders .= "Reply-To: contact@oceandigitech.com\r\n";

    // Send user confirmation email
    $userEmailSent = mail($email, $userSubject, $userMessage, $userHeaders);

    // --- SAVE TO DATABASE (OPTIONAL) ---
    // Uncomment and configure if you want to save leads to database
    /*
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    if ($conn->connect_error) {
        throw new Exception('Database connection failed');
    }

    $stmt = $conn->prepare("INSERT INTO audit_leads (full_name, company, email, website, focus_areas, budget, challenge, segment, ip_address, referrer, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssss", $fullName, $company, $email, $website, $focusAreasText, $budget, $challenge, $segment, $ipAddress, $referrer, $timestamp);

    $stmt->execute();
    $stmt->close();
    $conn->close();
    */

    // --- SAVE TO CSV FILE (BACKUP) ---
    $csvFile = 'audit-leads.csv';
    $csvExists = file_exists($csvFile);

    $csvHandle = fopen($csvFile, 'a');

    if (!$csvExists) {
        // Write header row
        fputcsv($csvHandle, array('Timestamp', 'Name', 'Company', 'Email', 'Website', 'Focus Areas', 'Budget', 'Challenge', 'Segment', 'IP', 'Referrer'));
    }

    // Write data row
    fputcsv($csvHandle, array($timestamp, $fullName, $company, $email, $website, $focusAreasText, $budget, $challenge, $segment, $ipAddress, $referrer));

    fclose($csvHandle);

    // --- ZAPIER WEBHOOK (OPTIONAL) ---
    // Uncomment to send data to Zapier for automation
    /*
    $zapierWebhook = 'https://hooks.zapier.com/hooks/catch/YOUR_WEBHOOK_ID/';

    $zapierData = array(
        'full_name' => $fullName,
        'company' => $company,
        'email' => $email,
        'website' => $website,
        'focus_areas' => $focusAreasText,
        'budget' => $budget,
        'challenge' => $challenge,
        'segment' => $segment,
        'timestamp' => $timestamp
    );

    $ch = curl_init($zapierWebhook);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($zapierData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $zapierResponse = curl_exec($ch);
    curl_close($ch);
    */

    // Success response
    $response['success'] = true;
    $response['message'] = 'Thank you! Your audit request has been submitted successfully.';
    $response['redirect'] = 'audit-thank-you.php';

} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = $e->getMessage();

    // Log error
    error_log("Audit Form Error: " . $e->getMessage());
}

// Return JSON response
echo json_encode($response);
exit;
?>
