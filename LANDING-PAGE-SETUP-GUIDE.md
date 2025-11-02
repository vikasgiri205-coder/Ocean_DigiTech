# 🚀 Free Audit Landing Page - Complete Setup Guide

## 📋 Table of Contents
1. [Overview](#overview)
2. [Files Created](#files-created)
3. [Configuration Checklist](#configuration-checklist)
4. [Integration Setup](#integration-setup)
5. [Testing Instructions](#testing-instructions)
6. [Deployment Guide](#deployment-guide)
7. [Troubleshooting](#troubleshooting)

---

## 🎯 Overview

This landing page is designed for **Google Ads & Meta (Facebook) lead generation campaigns** targeting US businesses. It offers a FREE Digital Growth & Performance Audit and segments leads into Marketing vs. Development focus areas.

### Key Features:
- ✅ Conversion-optimized single-page design
- ✅ Lead capture form with segmentation
- ✅ Email automation (admin + user confirmation)
- ✅ Calendly integration for strategy sessions
- ✅ Analytics tracking (GA4, Meta Pixel, Google Ads)
- ✅ Mobile-responsive design
- ✅ CSV backup system for leads
- ✅ Thank-you page with Calendly widget

---

## 📁 Files Created

### Main Files:
1. **free-audit-landing.php** - Main landing page
2. **process-audit-form.php** - Form submission handler
3. **audit-thank-you.php** - Thank you page with Calendly
4. **audit-leads.csv** - Auto-generated lead storage (created on first submission)

### File Structure:
```
public_html/
├── free-audit-landing.php       (Landing Page)
├── process-audit-form.php       (Form Handler)
├── audit-thank-you.php          (Thank You Page)
├── audit-leads.csv              (Auto-generated)
├── css/                         (Existing CSS files)
├── js/                          (Existing JS files)
└── img/                         (Images folder)
```

---

## ⚙️ Configuration Checklist

### 🔴 CRITICAL - Must Complete Before Launch

#### 1. Email Configuration (process-audit-form.php)

**Line 70:** Change admin email
```php
$adminEmail = 'your-admin@oceandigitech.com'; // REPLACE WITH YOUR EMAIL
```

**Line 87 & 174:** Update "From" email addresses
```php
"From: Ocean DigiTech <noreply@oceandigitech.com>\r\n";
// Replace with your actual domain email
```

---

#### 2. Analytics Tracking IDs

**free-audit-landing.php:**

**Line 14:** Replace Meta Pixel ID
```javascript
fbq('init', 'YOUR_PIXEL_ID'); // Replace with your Meta Pixel ID
```

**Line 19:** Replace Meta Pixel ID in noscript tag
```html
<img height="1" width="1" style="display:none"
     src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1"/>
```

**Line 26:** Replace Google Ads Conversion ID
```javascript
gtag('config', 'AW-XXXXXXXXX'); // Replace with your Google Ads ID
```

**Line 698:** Replace Google Ads Conversion tracking
```javascript
'send_to': 'AW-XXXXXXXXX/XXXXXX', // Replace with your conversion ID
```

---

**audit-thank-you.php:**

**Line 13:** Replace Google Ads Conversion ID
```javascript
'send_to': 'AW-XXXXXXXXX/XXXXXX' // Replace with your conversion ID
```

**Line 391:** Replace Calendly booking conversion
```javascript
'send_to': 'AW-XXXXXXXXX/YYYYYY' // Replace with booking conversion ID
```

---

#### 3. Calendly Integration

**audit-thank-you.php (Line 354):**
```html
<div class="calendly-inline-widget"
     data-url="https://calendly.com/your-account/strategy-session?hide_gdpr_banner=1"
     style="min-width:320px;height:700px;"></div>
```

**Replace with your Calendly URL:**
- Go to https://calendly.com
- Create an event type called "Strategy Session" (30 minutes)
- Configure availability for EST & PST time zones
- Copy your Calendly link
- Paste it in the `data-url` attribute

**Example:**
```html
data-url="https://calendly.com/oceandigitech-team/free-strategy-session?hide_gdpr_banner=1"
```

---

#### 4. Domain & URLs

**process-audit-form.php (Line 176):**
Update website URL in email footer:
```html
<a href='https://oceandigitech.com'>www.oceandigitech.com</a>
```

**audit-thank-you.php (Lines 277-285):**
Update social sharing URLs:
```html
<a href="https://www.linkedin.com/sharing/share-offsite/?url=https://yoursite.com/free-audit-landing.php"
```

Replace `yoursite.com` with your actual domain.

---

## 🔧 Integration Setup

### 1. Meta (Facebook) Pixel Setup

1. Go to https://business.facebook.com/events_manager
2. Create a new Pixel or use existing one
3. Copy your Pixel ID (15-16 digit number)
4. Replace `YOUR_PIXEL_ID` in:
   - `free-audit-landing.php` (Line 14 & 19)

**Test your pixel:**
- Install Meta Pixel Helper Chrome extension
- Visit your landing page
- Check if pixel is firing (green checkmark)

---

### 2. Google Ads Conversion Tracking

1. Go to Google Ads → Tools → Conversions
2. Create two conversion actions:
   - **Lead Submission** (for form completion)
   - **Strategy Call Booking** (for Calendly booking)

3. Copy the Conversion IDs:
   - Format: `AW-XXXXXXXXX/AbCdEfGhIj`

4. Replace in:
   - `free-audit-landing.php` (Line 26 & 698)
   - `audit-thank-you.php` (Line 13 & 391)

**Test conversions:**
- Use Google Tag Assistant
- Submit test form
- Check conversions in Google Ads (24-48 hours delay)

---

### 3. Zapier Automation (Optional but Recommended)

**Purpose:** Send personalized audit reports automatically

**Setup:**

1. Go to https://zapier.com
2. Create new Zap:
   - **Trigger:** Webhooks by Zapier → Catch Hook
   - **Action:** Email by Zapier → Send Email (or use HubSpot/Mailchimp)

3. Copy your Zapier webhook URL

4. In `process-audit-form.php` (Line 239-256):
```php
// Uncomment this section:
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
```

5. Replace `YOUR_WEBHOOK_ID` with your Zapier webhook URL

**Zap Flow:**
```
Form Submission → Zapier Webhook →
    → Send to Google Sheets (optional)
    → Send to HubSpot CRM (optional)
    → Send personalized audit PDF via email (24 hours delay)
```

---

### 4. Database Storage (Optional)

If you want to store leads in a database instead of CSV:

1. Create MySQL database table:
```sql
CREATE TABLE audit_leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    website VARCHAR(255),
    focus_areas TEXT,
    budget VARCHAR(50),
    challenge TEXT,
    segment VARCHAR(100),
    ip_address VARCHAR(50),
    referrer TEXT,
    created_at DATETIME,
    INDEX idx_email (email),
    INDEX idx_created_at (created_at)
);
```

2. In `process-audit-form.php` (Line 223-237):
```php
// Uncomment and configure:
$conn = new mysqli('localhost', 'username', 'password', 'database');

if ($conn->connect_error) {
    throw new Exception('Database connection failed');
}

$stmt = $conn->prepare("INSERT INTO audit_leads (full_name, company, email, website, focus_areas, budget, challenge, segment, ip_address, referrer, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssss", $fullName, $company, $email, $website, $focusAreasText, $budget, $challenge, $segment, $ipAddress, $referrer, $timestamp);

$stmt->execute();
$stmt->close();
$conn->close();
```

3. Replace database credentials

---

### 5. Calendly Configuration

**Steps:**

1. Create Calendly account: https://calendly.com/signup
2. Set up event type:
   - **Event name:** "Free Strategy Session"
   - **Duration:** 30 minutes
   - **Location:** Zoom or Google Meet
   - **Availability:** EST & PST time zones

3. Configure availability:
   - Monday-Friday: 9 AM - 5 PM EST
   - Monday-Friday: 9 AM - 5 PM PST

4. Customize confirmation page:
   - Add booking confirmation message
   - Send calendar invites automatically
   - Add reminder emails (24 hours + 1 hour before)

5. Copy your event link and paste in `audit-thank-you.php` (Line 354)

**Advanced:** Add routing forms to assign different team members based on lead segment (Marketing vs. Development)

---

## 🧪 Testing Instructions

### Pre-Launch Testing Checklist

#### 1. Visual Testing
- [ ] Desktop: Chrome, Safari, Firefox, Edge
- [ ] Mobile: iPhone Safari, Android Chrome
- [ ] Tablet: iPad Safari

#### 2. Form Testing
- [ ] Fill out form with test data
- [ ] Check required field validation
- [ ] Test email format validation
- [ ] Test URL validation
- [ ] Submit form

#### 3. Email Testing
- [ ] Verify admin notification received
- [ ] Verify user confirmation received
- [ ] Check email formatting (Gmail, Outlook, Apple Mail)
- [ ] Test links in email (Calendly link)

#### 4. Analytics Testing
- [ ] Check Google Analytics pageview tracking
- [ ] Test Meta Pixel (use Meta Pixel Helper)
- [ ] Test Google Ads conversion tracking
- [ ] Verify form submission event

#### 5. CSV Backup Testing
- [ ] Submit test form
- [ ] Check if `audit-leads.csv` was created
- [ ] Verify data is saved correctly
- [ ] Check file permissions (should be writable)

#### 6. Calendly Testing
- [ ] Click Calendly widget on thank-you page
- [ ] Book a test appointment
- [ ] Verify calendar invite received
- [ ] Check conversion tracking fires

#### 7. Mobile Responsiveness
- [ ] Test on actual mobile device (not just browser inspector)
- [ ] Check sticky CTA appears on mobile
- [ ] Test form submission on mobile
- [ ] Verify page loads under 3 seconds

---

## 🚀 Deployment Guide

### Step 1: Prepare Your Server

**Requirements:**
- PHP 7.4 or higher
- Apache or Nginx web server
- SSL certificate (HTTPS required for Facebook Pixel & Google Ads)
- Email server (or use PHPMailer with SMTP)

### Step 2: Upload Files

```bash
# Via FTP/SFTP:
Upload to: /public_html/

# Or via command line:
scp free-audit-landing.php user@server:/path/to/public_html/
scp process-audit-form.php user@server:/path/to/public_html/
scp audit-thank-you.php user@server:/path/to/public_html/
```

### Step 3: Set File Permissions

```bash
chmod 644 free-audit-landing.php
chmod 644 process-audit-form.php
chmod 644 audit-thank-you.php
chmod 666 audit-leads.csv  # Will be created automatically with write permissions
```

### Step 4: Test in Production

1. Visit: `https://yourdomain.com/free-audit-landing.php`
2. Submit test form
3. Check if CSV file is created
4. Verify emails are sent

### Step 5: Create Google Ads Campaign

**Campaign Structure:**
```
Campaign: US Digital Audit - Search
  └─ Ad Group 1: Digital Marketing Audit
      ├─ Keywords:
      │   ├─ "free digital marketing audit"
      │   ├─ "website performance audit"
      │   └─ "seo audit free"
      └─ Ads:
          └─ Final URL: https://yourdomain.com/free-audit-landing.php?utm_source=google&utm_medium=cpc&utm_campaign=audit
```

### Step 6: Create Meta (Facebook) Ads Campaign

**Campaign Structure:**
```
Campaign: US Business Audit - Traffic
  └─ Ad Set 1: Business Owners 25-55
      ├─ Targeting: US, Business Owners, Marketing Managers
      └─ Ads:
          └─ Landing Page: https://yourdomain.com/free-audit-landing.php?utm_source=facebook&utm_medium=cpc&utm_campaign=audit
```

### Step 7: Monitor Performance

**Key Metrics to Track:**
- Landing page visits
- Form submission rate (conversion rate)
- Cost per lead (CPL)
- Calendly booking rate
- Email open rates

**Tools:**
- Google Analytics 4
- Meta Ads Manager
- Google Ads Dashboard
- Your CSV file (`audit-leads.csv`)

---

## 🐛 Troubleshooting

### Issue: Emails Not Sending

**Solution 1:** Check PHP mail configuration
```php
// Add to process-audit-form.php for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if mail function works
if (mail('test@example.com', 'Test', 'Test message')) {
    echo 'Mail sent';
} else {
    echo 'Mail failed';
}
```

**Solution 2:** Use SMTP instead of PHP mail()

Install PHPMailer:
```bash
composer require phpmailer/phpmailer
```

Replace mail() function with PHPMailer configuration.

---

### Issue: Form Not Submitting

**Check:**
1. Browser console for JavaScript errors
2. Network tab in DevTools - check if POST request succeeds
3. Check `process-audit-form.php` returns valid JSON
4. Verify AJAX request URL is correct

**Debug:**
```javascript
// In free-audit-landing.php (Line 698)
fetch('process-audit-form.php', {
    method: 'POST',
    body: formData
})
.then(response => {
    console.log('Response:', response); // Debug
    return response.json();
})
.then(data => {
    console.log('Data:', data); // Debug
    // ...rest of code
});
```

---

### Issue: CSV File Not Created

**Causes:**
- File permissions issue
- Directory not writable

**Solution:**
```bash
# Check directory permissions
ls -la /path/to/public_html/

# Make directory writable
chmod 755 /path/to/public_html/

# Manually create CSV file
touch audit-leads.csv
chmod 666 audit-leads.csv
```

---

### Issue: Calendly Not Loading

**Causes:**
- Incorrect Calendly URL
- JavaScript blocked
- CORS issues

**Solution:**
1. Verify Calendly URL is correct
2. Check browser console for errors
3. Test on different browser
4. Ensure Calendly account is active

---

### Issue: Tracking Not Working

**Meta Pixel:**
- Install Meta Pixel Helper Chrome extension
- Check if pixel fires (should show green checkmark)
- Verify Pixel ID is correct
- Check if ad blocker is interfering

**Google Ads:**
- Use Google Tag Assistant Chrome extension
- Check if gtag.js is loaded
- Verify Conversion ID format: `AW-XXXXXXXXX/AbCdEfGhIj`
- Wait 24-48 hours for conversions to appear

---

## 📊 Performance Optimization

### Speed Optimization Tips

1. **Optimize CSS:**
```bash
# Minify CSS files
css/style.css → css/style.min.css
```

2. **Enable Compression:**
```apache
# Add to .htaccess
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/css text/javascript application/javascript
</IfModule>
```

3. **Enable Browser Caching:**
```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
</IfModule>
```

4. **Use CDN for Font Awesome & Bootstrap**
Already implemented in the code!

5. **Lazy Load Images**
If you add images later, use:
```html
<img src="image.jpg" loading="lazy" alt="Description">
```

---

## 📈 Conversion Rate Optimization (CRO) Tips

### A/B Testing Ideas

**Test 1: Headline Variations**
- Current: "Get Your FREE Digital Growth & Performance Audit"
- Variant A: "Discover What's Holding Your Business Back — Free Audit"
- Variant B: "How Much Revenue Are You Losing? Find Out Free"

**Test 2: CTA Button Text**
- Current: "Start My Free Audit"
- Variant A: "Get My Free Audit Now"
- Variant B: "Show Me My Growth Opportunities"

**Test 3: Form Length**
- Current: 7 fields
- Variant A: 4 fields (name, email, website, challenge)
- Variant B: 2-step form (basic info first, then details)

---

## 🎯 Lead Segmentation Strategy

The form automatically segments leads into:

1. **Development Focus** - Needs tech/website help
2. **Marketing Focus** - Needs SEO/PPC/social help
3. **Full Audit** - Needs everything
4. **Mixed** - Combination

**Use this segmentation to:**
- Route leads to different team members
- Send different audit reports
- Customize follow-up messaging
- Calculate lead value (dev leads might be higher value)

---

## 🔐 Security Considerations

1. **Input Sanitization:** Already implemented
2. **CSRF Protection:** Add if you have sessions
3. **Rate Limiting:** Add to prevent spam
4. **reCAPTCHA:** Consider adding to form

**Add reCAPTCHA v3:**
```html
<script src="https://www.google.com/recaptcha/api.js?render=YOUR_SITE_KEY"></script>

<script>
grecaptcha.execute('YOUR_SITE_KEY', {action: 'submit'}).then(function(token) {
    // Add token to form
    document.getElementById('recaptchaToken').value = token;
});
</script>
```

---

## 📱 Mobile Optimization

Features already included:
- ✅ Responsive grid layouts
- ✅ Mobile-friendly form inputs
- ✅ Sticky CTA button on mobile
- ✅ Touch-friendly button sizes
- ✅ Optimized font sizes

---

## 🎨 Customization Guide

### Change Colors

Edit CSS variables in `free-audit-landing.php` (Line 67-72):
```css
:root {
    --primary-color: #e80566;      /* Main pink color */
    --secondary-color: #667eea;    /* Purple color */
    --dark-color: #1a1a1a;         /* Text color */
    --success-color: #10b981;      /* Green for checkmarks */
    --warning-color: #f59e0b;      /* Orange for stars */
}
```

### Change Fonts

Replace Google Fonts link (Line 43):
```html
<link href="https://fonts.googleapis.com/css2?family=YOUR_FONT:wght@400;700&display=swap" rel="stylesheet">
```

### Add Your Logo

Add to hero section:
```html
<div class="hero-content fadeInUp">
    <img src="img/logo.png" alt="Ocean DigiTech" style="max-width: 200px; margin-bottom: 20px;">
    <!-- Rest of hero content -->
</div>
```

---

## 📞 Support & Maintenance

### Regular Maintenance Tasks

**Weekly:**
- [ ] Download and backup `audit-leads.csv`
- [ ] Check email deliverability
- [ ] Review form submissions
- [ ] Check Calendly bookings

**Monthly:**
- [ ] Review analytics data
- [ ] Test form submission
- [ ] Check for broken links
- [ ] Review conversion rates

---

## ✅ Final Pre-Launch Checklist

- [ ] All email addresses updated
- [ ] Meta Pixel ID configured
- [ ] Google Ads tracking configured
- [ ] Calendly link updated
- [ ] Domain URLs updated
- [ ] Test form submission
- [ ] Test email delivery
- [ ] Test Calendly booking
- [ ] Test on mobile device
- [ ] Check page load speed (<3 seconds)
- [ ] Verify SSL certificate active
- [ ] Test all analytics tracking
- [ ] Backup all files
- [ ] Document credentials in secure location

---

## 🎉 Launch Day Checklist

1. [ ] Final test submission
2. [ ] Clear test data from CSV
3. [ ] Set up Google Ads campaign
4. [ ] Set up Meta Ads campaign
5. [ ] Monitor first 10 leads closely
6. [ ] Check email delivery rates
7. [ ] Monitor conversion tracking
8. [ ] Set up daily performance reports

---

## 📧 Need Help?

If you need assistance:
1. Check the troubleshooting section above
2. Review PHP error logs: `/var/log/php-errors.log`
3. Check Apache/Nginx error logs
4. Test in incognito mode to rule out caching issues

---

## 🚀 Ready to Launch!

Your landing page is now fully configured and ready for traffic!

**Landing Page URL:**
`https://yourdomain.com/free-audit-landing.php`

**Thank You Page URL:**
`https://yourdomain.com/audit-thank-you.php`

Good luck with your lead generation campaigns! 🎯

---

**Document Version:** 1.0
**Last Updated:** 2025-11-02
**Created by:** Ocean DigiTech Development Team
