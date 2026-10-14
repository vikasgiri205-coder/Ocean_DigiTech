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
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Schedule your consultation with Ocean DigiTech">
    <meta name="robots" content="noindex, nofollow">

    <!-- Allow Calendly iframe permissions -->
    <meta http-equiv="Permissions-Policy" content="payment=*, geolocation=*, microphone=*, camera=*">

    <title>Schedule Your Consultation | Ocean DigiTech</title>

    <link rel="icon" href="img/fevicon.png" type="image/png" sizes="16x16">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Calendly CSS -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #1a1a1a;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px 20px;
        }

        .heading-container {
            text-align: center;
            max-width: 800px;
            margin-bottom: 40px;
        }

        .main-heading {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .sub-heading {
            font-size: 18px;
            font-weight: 400;
            color: #666;
            line-height: 1.6;
        }

        .calendly-container {
            width: 100%;
            max-width: 1000px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .calendly-inline-widget {
            min-height: 700px;
            height: 100%;
            width: 100%;
            flex: 1;
        }

        .calendly-inline-widget iframe {
            width: 100%;
            height: 100%;
            min-height: 700px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 30px 15px 15px;
            }

            .main-heading {
                font-size: 24px;
            }

            .sub-heading {
                font-size: 16px;
            }

            .calendly-inline-widget {
                min-height: 600px;
            }
        }
    </style>
</head>

<body>

    <div class="heading-container">
        <h1 class="main-heading">Thank you for submitting the audit request!</h1>
        <p class="sub-heading">Please select a time below to schedule your consultation.</p>
    </div>

    <div class="calendly-container">
        <!-- Calendly Inline Widget -->
        <div id="calendly-embed" class="calendly-inline-widget"></div>
    </div>

    <!-- Calendly Widget Script -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>

    <script>
        // Initialize Calendly when widget.js is loaded
        window.addEventListener('load', function() {
            if (typeof Calendly !== 'undefined') {
                Calendly.initInlineWidget({
                    url: 'https://calendly.com/vikasgiri205/30min?hide_gdpr_banner=1&hide_landing_page_details=1&hide_event_type_details=1',
                    parentElement: document.getElementById('calendly-embed'),
                    prefill: {},
                    utm: {}
                });
            }
        });

        // Track page view
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_view', {
                page_title: 'Booking Landing Page',
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
                            'send_to': 'AW-XXXXXXXXX/YYYYYY'
                        });
                    }

                    console.log('Calendly event scheduled!');
                }
            }
        });
    </script>

    <?php include('chatbot-widget.php'); ?>
</body>
</html>
