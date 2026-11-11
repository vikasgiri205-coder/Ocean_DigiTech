<?php
header('Content-Type: text/plain; charset=utf-8');
ini_set('display_errors', 0);
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') { http_response_code(405); echo 'NO'; exit; }
$businessName = is_string($_POST['businessName'] ?? null) ? trim($_POST['businessName']) : '';
if ($businessName === '' || strlen($businessName) > 250 || preg_match('/[\r\n]/', $businessName)) { http_response_code(400); echo 'NO'; exit; }
$emailTo = 'contact@oceandigitech.com';
if ($businessName) {
  $subject = "Proposal Request: " . $businessName;
  $message = '
  <div style="font-family: Arial, sans-serif; color:#333; background:#f6f6f6; padding:20px;">
    <div style="max-width:600px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e6e6e6;">
      <div style="background:#e80566;color:#ffffff;padding:16px 20px;font-weight:700;font-size:18px;">
        Proposal Request
      </div>
      <div style="padding:20px 24px;">
        <div style="margin-bottom:12px;">
          <span style="font-weight:700;color:#333;">Business Name:</span>
          <span style="margin-left:8px; font-weight:700; color:#111;">' . htmlspecialchars($businessName) . '</span>
        </div>
      </div>
    </div>
  </div>';

  // Saare headers ek sath
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=UTF-8\r\n";
  $headers .= "From: contact@oceandigitech.com\r\n";

  if (mail($emailTo, $subject, $message, $headers)) {
    echo "OK";
  } else {
    echo "ERR";
  }
} else {
  echo "NO";
}
?>