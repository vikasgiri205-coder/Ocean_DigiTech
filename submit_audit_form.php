<?php
// Form submission handler for Digital Growth Audit form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $fullName = htmlspecialchars(trim($_POST['fullName']));
    $companyName = htmlspecialchars(trim($_POST['companyName']));
    $workEmail = htmlspecialchars(trim($_POST['workEmail']));
    $websiteURL = htmlspecialchars(trim($_POST['websiteURL']));

    // Validate required fields
    if (empty($fullName) || empty($companyName) || empty($workEmail) || empty($websiteURL)) {
        header("Location: index.php?error=missing_fields");
        exit();
    }

    // Validate email
    if (!filter_var($workEmail, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalid_email");
        exit();
    }

    // Email configuration
    $to = "info@oceandigitech.com"; // Change this to your email
    $subject = "New Digital Growth Audit Request - " . $companyName;

    // Email content
    $message = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .header { background: linear-gradient(135deg, #667eea, #764ba2); color: white; padding: 20px; }
            .content { padding: 20px; background: #f8f9fa; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
            .value { color: #666; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>New Digital Growth Audit Request</h2>
        </div>
        <div class='content'>
            <div class='field'>
                <span class='label'>Full Name:</span>
                <span class='value'>{$fullName}</span>
            </div>
            <div class='field'>
                <span class='label'>Company Name:</span>
                <span class='value'>{$companyName}</span>
            </div>
            <div class='field'>
                <span class='label'>Work Email:</span>
                <span class='value'>{$workEmail}</span>
            </div>
            <div class='field'>
                <span class='label'>Website URL:</span>
                <span class='value'><a href='{$websiteURL}'>{$websiteURL}</a></span>
            </div>
            <div class='field'>
                <span class='label'>Submitted:</span>
                <span class='value'>" . date('Y-m-d H:i:s') . "</span>
            </div>
        </div>
    </body>
    </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Audit Form <noreply@oceandigitech.com>" . "\r\n";
    $headers .= "Reply-To: {$workEmail}" . "\r\n";

    // Send email
    $mailSent = mail($to, $subject, $message, $headers);

    // Optional: Send confirmation email to user
    $userSubject = "Thank You for Your Audit Request - Ocean DigiTech";
    $userMessage = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .header { background: linear-gradient(135deg, #667eea, #764ba2); color: white; padding: 20px; text-align: center; }
            .content { padding: 30px; background: #ffffff; }
        </style>
    </head>
    <body>
        <div class='header'>
            <h2>Thank You for Requesting Your Audit!</h2>
        </div>
        <div class='content'>
            <p>Hi {$fullName},</p>

            <p>Thank you for requesting a free digital growth audit from Ocean DigiTech!</p>

            <p>We've received your information and our expert team is already getting started on your comprehensive audit.</p>

            <h3>What Happens Next?</h3>
            <ol>
                <li><strong>Analysis:</strong> Our team will conduct a thorough review of your website, marketing, and technology stack.</li>
                <li><strong>Report:</strong> Within 24 hours, you'll receive your personalized audit report with actionable recommendations.</li>
                <li><strong>Strategy Call:</strong> Book a free consultation to discuss implementation and next steps.</li>
            </ol>

            <p>If you have any questions in the meantime, feel free to reply to this email.</p>

            <p>Best regards,<br>
            Ocean DigiTech Team<br>
            530 Main St, Ste 3A, Chester, NJ 07930<br>
            Phone: +1 (862) 285-5275</p>
        </div>
    </body>
    </html>
    ";

    $userHeaders = "MIME-Version: 1.0" . "\r\n";
    $userHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $userHeaders .= "From: Ocean DigiTech <info@oceandigitech.com>" . "\r\n";

    mail($workEmail, $userSubject, $userMessage, $userHeaders);

    // Redirect to thank you page
    header("Location: audit-thank-you.php");
    exit();

} else {
    // If not POST request, redirect back to home page
    header("Location: index.php");
    exit();
}
?>
