<?php
$businessName = isset($_POST['businessName']) ? $_POST['businessName'] : '';
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