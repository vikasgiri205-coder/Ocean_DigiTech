<!doctype html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KN6QBYZNZN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-KN6QBYZNZN');

        // Track conversion
        gtag('event', 'conversion', {
            'send_to': 'AW-XXXXXXXXX/XXXXXX' // Replace with your conversion ID
        });
    </script>

    <!-- Meta Pixel - Conversion Tracking -->
    <script>
        if (typeof fbq !== 'undefined') {
            fbq('track', 'CompleteRegistration');
        }
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Thank you for requesting your free digital audit from Ocean DigiTech">
    <meta name="robots" content="noindex, nofollow">

    <title>Thank You! Your Audit is Being Prepared | Ocean DigiTech</title>

    <link rel="icon" href="img/fevicon.png" type="image/png" sizes="16x16">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Calendly CSS -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #e80566;
            --secondary-color: #667eea;
            --dark-color: #1a1a1a;
            --success-color: #10b981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
            background: #f8f9fa;
        }

        .thank-you-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 60px 20px;
            position: relative;
            overflow: hidden;
        }

        .thank-you-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .success-icon {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            font-size: 60px;
            color: var(--success-color);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            animation: scaleIn 0.5s ease;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .thank-you-title {
            font-size: 48px;
            font-weight: 900;
            margin-bottom: 20px;
            animation: fadeInUp 0.6s ease 0.2s both;
        }

        .thank-you-subtitle {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.95;
            animation: fadeInUp 0.6s ease 0.4s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .info-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: fadeInUp 0.6s ease 0.6s both;
        }

        .info-box h3 {
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .checklist {
            list-style: none;
            padding: 0;
            text-align: left;
            display: inline-block;
            margin: 0 auto;
        }

        .checklist li {
            padding: 10px 0;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .checklist li i {
            color: var(--success-color);
            font-size: 20px;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 36px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .section-subtitle {
            text-align: center;
            font-size: 18px;
            color: #666;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        .calendly-section {
            background: white;
            padding: 60px 20px;
            border-radius: 20px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }

        .calendly-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), #ff1493);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .next-steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .step-card {
            background: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
        }

        .step-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--secondary-color), #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 36px;
        }

        .step-number {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 35px;
            height: 35px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
        }

        .step-card {
            position: relative;
        }

        .step-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .step-description {
            font-size: 15px;
            color: #666;
            line-height: 1.6;
        }

        .social-share {
            text-align: center;
            padding: 50px 0;
            background: #f8f9fa;
        }

        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .social-btn:hover {
            transform: translateY(-3px);
        }

        .social-btn.linkedin { background: #0077b5; }
        .social-btn.facebook { background: #1877f2; }
        .social-btn.twitter { background: #1da1f2; }

        footer {
            background: #1a1a1a;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        footer a {
            color: #ccc;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .next-steps-grid {
                grid-template-columns: 1fr;
            }

            .thank-you-title {
                font-size: 36px;
            }

            .section-title {
                font-size: 28px;
            }
        }

        @media (max-width: 768px) {
            .thank-you-title {
                font-size: 32px;
            }

            .thank-you-subtitle {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Thank You Hero Section -->
    <section class="thank-you-hero">
        <div class="container">
            <div class="hero-content">
                <div class="success-icon">
                    <i class="fas fa-check"></i>
                </div>

                <h1 class="thank-you-title">Thank You! 🎉</h1>

                <p class="thank-you-subtitle">
                    Your personalized audit will arrive in your inbox within <strong>24 hours</strong>.
                </p>

                <div class="info-box">
                    <h3>📧 Check Your Email</h3>
                    <p style="margin-bottom: 20px;">We've sent you a confirmation email with details about what to expect.</p>

                    <h3 style="margin-top: 25px;">Your Audit Will Include:</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-check-circle"></i> Website Performance Analysis</li>
                        <li><i class="fas fa-check-circle"></i> SEO & Marketing Opportunities</li>
                        <li><i class="fas fa-check-circle"></i> Technology Stack Review</li>
                        <li><i class="fas fa-check-circle"></i> Competitive Benchmarking</li>
                        <li><i class="fas fa-check-circle"></i> Actionable Growth Recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendly Booking Section -->
    <section class="section">
        <div class="container">
            <div class="calendly-section">
                <div style="text-align: center;">
                    <span class="calendly-badge">⚡ FAST-TRACK YOUR RESULTS</span>
                </div>

                <h2 class="section-title">Want to Discuss Your Results Now?</h2>
                <p class="section-subtitle">
                    Book a free 30-minute strategy session with one of our digital growth experts. We'll walk through your audit and answer any questions you have.
                </p>

                <!-- Calendly Inline Widget -->
                <div class="calendly-inline-widget"
                     data-url="https://calendly.com/your-account/strategy-session?hide_gdpr_banner=1"
                     style="min-width:320px;height:700px;"></div>

                <div style="text-align: center; margin-top: 30px; padding: 20px; background: #f0f9ff; border-radius: 10px;">
                    <p style="font-size: 14px; color: #666; margin: 0;">
                        <i class="fas fa-clock"></i> <strong>Available Time Zones:</strong> EST & PST<br>
                        <i class="fas fa-video"></i> Virtual consultation via Zoom or Google Meet<br>
                        <i class="fas fa-gift"></i> 100% Free — No obligation
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What Happens Next Section -->
    <section class="section" style="background: #f8f9fa;">
        <div class="container">
            <h2 class="section-title">What Happens Next?</h2>
            <p class="section-subtitle">
                Here's what you can expect from Ocean DigiTech in the coming days
            </p>

            <div class="next-steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="step-title">We Analyze</h3>
                    <p class="step-description">
                        Our expert team conducts a comprehensive audit of your website, marketing, and technology stack.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="step-title">You Receive Report</h3>
                    <p class="step-description">
                        Within 24 hours, you'll get a detailed audit report with personalized recommendations via email.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="step-title">We Strategize</h3>
                    <p class="step-description">
                        Book a free consultation to discuss implementation and how we can help you grow faster.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Share Section -->
    <section class="social-share">
        <div class="container">
            <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 15px;">Know Someone Who Needs This?</h3>
            <p style="color: #666; margin-bottom: 30px;">
                Share this free audit opportunity with your network
            </p>

            <div class="social-buttons">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://yoursite.com/free-audit-landing.php"
                   target="_blank"
                   class="social-btn linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://yoursite.com/free-audit-landing.php"
                   target="_blank"
                   class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=https://yoursite.com/free-audit-landing.php&text=Get%20a%20FREE%20Digital%20Growth%20Audit"
                   target="_blank"
                   class="social-btn twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-bottom: 20px;">
                <a href="index.php">Home</a>
                <a href="about-us.php">About</a>
                <a href="services.php">Services</a>
                <a href="contact-us.php">Contact</a>
            </div>

            <div style="margin: 30px 0;">
                <div style="display: flex; justify-content: center; gap: 20px; font-size: 24px;">
                    <a href="#" style="color: #667eea;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: #1877f2;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: #e1306c;"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div style="font-size: 14px; color: #999; margin-top: 20px;">
                <p>© 2025 Ocean DigiTech | 530 Main St, Ste 3A, Chester, NJ 07930, United States</p>
                <p>Phone: +1 (862) 285-5275 | Your Growth Partner in Digital Success</p>
            </div>
        </div>
    </footer>

    <!-- Calendly Widget Script -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

    <script>
        // Track page view
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view', {
                page_title: 'Audit Thank You Page',
                page_location: window.location.href
            });
        }

        // Track Calendly events
        function isCalendlyEvent(e) {
            return e.data.event && e.data.event.indexOf('calendly') === 0;
        }

        window.addEventListener('message', function(e) {
            if (isCalendlyEvent(e)) {
                if (e.data.event === 'calendly.event_scheduled') {
                    // Track booking conversion
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'conversion', {
                            'send_to': 'AW-XXXXXXXXX/YYYYYY' // Replace with booking conversion ID
                        });
                    }

                    if (typeof fbq !== 'undefined') {
                        fbq('track', 'Schedule');
                    }

                    console.log('Calendly event scheduled!');
                }
            }
        });

        // Smooth animations on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.step-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>

</body>
</html>
