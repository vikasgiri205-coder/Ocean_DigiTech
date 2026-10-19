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
<!-- Google tag end (gtag.js) -->
<!-- Fungrow Analytics -->
<script>
    window.FUNGROW_CONFIG = {
        analytics: {
            debug: false,
            enableSuperTracking: true,
            enableVideoTracking: true,
            enablePixelPerfectHeatmap: true,
            enableAutoEntityDetect: true,
            requireConsent: true,
            showConsentBanner: true,
            privacyPolicyUrl: "/privacy-policy",
            
            // Custom Hooks (Optional but very powerful)
            hooks: {
                onAfterEvent: function(event) {
                  
                }
            }
        }
    };
</script>

<script async src="http://marketing.fungrow.in/fungrow/app.js" data-client-code="FUNGROW-PC8KBBLD"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Ocean DigiTech Pvt. Ltd. - Global Web Development & Digital Marketing Agency delivering high-impact solutions from India to the USA.">
    <meta name="author" content="Ocean DigiTech">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Ocean Digitech Pvt. Ltd. | Global Web Development & Digital Marketing Agency</title>

    <!--favicon icon-->
    <link rel="icon" href="img/fevicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/all.min.css">
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo file_exists("css/style.css") ? filemtime("css/style.css") : "2.1"; ?>">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css?v=<?php echo file_exists("css/responsive.css") ? filemtime("css/responsive.css") : "2.1"; ?>">

</head>

<body>


<?php include('header.php');?>



<style>
    .quick-proposal {
     display: flex;
    align-items: center;
    gap: 6px;
    font-family: Arial, sans-serif;
    padding: 0px;
    }
    .quick-proposal input[type="text"] {
      padding: 12px 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      min-width: 240px;
      outline: none;
    }
    .quick-proposal button {
      background: #e80566;
      color: #fff;
      border: none;
      padding: 12px 16px;
      border-radius: 6px;
      cursor: pointer;
    }
    
    @media (max-width: 600px) {
  .quick-proposal {
    flex-direction: column;
    align-items: stretch;
  }

  .quick-proposal input[type="text"] {
    width: 100%;
    border-radius: 8px;
  }

  .quick-proposal button {
    width: 100%;
    margin-top: 8px;
    border-radius: 8px;
  }
}
    
  </style>
  
<script>
    function sendProposal() {
      const nameInput = document.getElementById('businessName');
      const name = nameInput.value.trim();
      if(!name) { alert('Please enter your Business Name.'); return; }

      fetch('send_proposal_simple.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'businessName=' + encodeURIComponent(name)
      })
      .then(res => res.text())
      .then(res => {
        if(res.trim() === 'OK'){
          alert('Proposal request sent to email.');
          // Clear field after successful submit
          nameInput.value = '';
        } else {
          alert('Error sending proposal.');
          // Optional: keep text for user to retry
        }
      })
      .catch(() => alert('Network error.'));
    }
  </script>
 
     <!--body content wrap start-->
    <div class="main">

        <!--hero section start-->
        <section class="hero-modern-wrap" style="background: linear-gradient(135deg, #0b0f19 0%, #171e31 50%, #1e1035 100%); color: #ffffff; padding-top: 130px; padding-bottom: 60px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="hero-slider-content text-white">
                            <div class="hero-pill-badge">
                                <span class="fas fa-sparkles"></span> AI-POWERED DIGITAL TRANSFORMATION
                            </div>
                            <h1 class="hero-heading-title">
                                Scalable Software Engineering & <span class="hero-gradient-text">Modern Digital Growth</span>
                            </h1>
                            <p class="hero-lead-desc">
                                We engineer high-performing web apps, custom software platforms, and data-driven digital growth strategies for B2B enterprises and ambitious startups.
                            </p>

                            <div class="action-btns mt-4">
                                <div class="quick-proposal-wrap">
                                    <div class="quick-proposal">
                                        <div class="input-with-icon">
                                            <input type="text" id="businessName" placeholder="Enter your business domain or email" required class="hero-input-field" style="padding-left: 20px !important;" />
                                        </div>
                                        <button type="button" onclick="sendProposal()" class="btn-primary-od">
                                            <span>Get Free Proposal</span>
                                            <span class="fas fa-arrow-right ml-1"></span>
                                        </button>
                                    </div>
                                    <div class="hero-micro-trust mt-3">
                                        <span><i class="fas fa-bolt text-warning mr-1"></i> Free 48-Hour Growth Audit</span>
                                        <span class="mx-2" style="opacity: 0.5;">&bull;</span>
                                        <span><i class="fas fa-shield-alt text-success mr-1"></i> 100% Confidential</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                        <div class="hero-visual-card-glow">
                            <div class="hero-visual-card">
                                <img src="img/hero-tech-isometric.jpg" class="hero-visual-img" alt="Scalable Software Engineering & Modern Digital Growth" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--trust bar section start-->
        <section class="trust-bar-section">
            <div class="container">
                <div class="row align-items-center justify-content-between text-center">
                    <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <h3 class="mb-0 font-weight-bold color-primary">500+</h3>
                            <span class="text-muted text-left font-weight-bold" style="font-size: 13px; line-height: 1.2;">Global<br>Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0 text-center">
                        <img src="img/cluch.jpg" alt="Clutch Verified Agency" class="trust-badge-img" style="height: 48px; max-height: 48px; max-width: 140px; width: auto; object-fit: contain; display: inline-block;">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <img src="img/tech-behemoths.png" alt="Tech Behemoths Top Agency" class="trust-badge-img" style="height: 48px; max-height: 48px; max-width: 140px; width: auto; object-fit: contain; display: inline-block;">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <img src="img/top-developers.png" alt="Top Developers Award" class="trust-badge-img" style="height: 48px; max-height: 48px; max-width: 140px; width: auto; object-fit: contain; display: inline-block;">
                    </div>
                </div>
            </div>
        </section>
        <!--trust bar section end-->

        <!--about us / boutique expertise section start-->
        <section class="boutique-section">
            <div class="boutique-bg-glow"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                        <div class="boutique-image-glow-wrap">
                            <div class="boutique-image-card">
                                <img src="img/boutique-global-engine.jpg" alt="Global Digital Engine - Ocean Digitech" class="img-fluid boutique-img" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="pl-lg-4">
                            <span class="badge badge-pill px-3 py-2 text-uppercase font-weight-bold mb-2" style="background: rgba(232, 5, 102, 0.1); color: #e80566; letter-spacing: 1px; font-size: 11px;">Why Ocean DigiTech</span>
                            <h2 style="font-weight: 800; font-size: 2.15rem; color: #0b132b; line-height: 1.25; margin-bottom: 12px;">
                                Boutique Expertise,<br>
                                <span style="background: linear-gradient(135deg, #00d2ff 0%, #0066ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Global Results.</span>
                            </h2>
                            <p style="font-size: 14.5px; color: #475569; line-height: 1.6; margin-bottom: 16px;">
                                Ocean DigiTech blends creative strategy and technical mastery to deliver measurable business results. Our cross-functional teams collaborate, innovate, and empower your digital journey with speed and precision.
                            </p>

                            <!-- Interactive Pillar Cards -->
                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-light-bulb"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 14px;">Guided by Creativity. Propelled by Data.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 12.5px; line-height: 1.45;">Every product and campaign is backed by user analytics and rigorous conversion data.</p>
                                </div>
                            </div>

                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-bolt"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 14px;">Masters in Craft. Obsessed With Outcomes.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 12.5px; line-height: 1.45;">From pixel-perfect UI to scalable microservices, our engineering delivers high-ROI results.</p>
                                </div>
                            </div>

                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-medall"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 14px;">Trusted by Fortune 500s & Bold Startups.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 12.5px; line-height: 1.45;">Flexible engagement models built for ambitious brands wanting rapid digital transformation.</p>
                                </div>
                            </div>

                            <!-- Animated Stat Counters -->
                            <div class="row mt-3 pt-1">
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">350+</div>
                                        <div class="boutique-stat-label">Projects</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">500+</div>
                                        <div class="boutique-stat-label">Clients</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">18+</div>
                                        <div class="boutique-stat-label">Countries</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mt-3 pt-1">
                                <a href="contact-us" class="btn secondary-solid-btn mr-3" style="padding: 11px 24px; border-radius: 8px; font-weight: 600; font-size: 14px;">Start Your Project</a>
                                <a href="project" class="btn secondary-outline-btn" style="padding: 11px 24px; border-radius: 8px; font-weight: 600; font-size: 14px;">Explore Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us / boutique expertise section end-->


        <!--call to action section start-->
        <!--<section class="call-to-action ptb-70" style="background: url('img/cta-bg.jpg')no-repeat center center / cover">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-10 col-lg-9">-->
        <!--                <div class="section-heading text-center text-white mb-5">-->
        <!--                    <h2 class="text-white">Check Your Site Performance</h2>-->
        <!--                    <p class="lead">Globally reinvent cross-unit human capital whereas virtual catalysts for-->
        <!--                        change. Assertively-->
        <!--                        network accurate methods of empowerment rather than client-centered improvements.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-10 col-lg-8">-->
        <!--                <div class="analysis-form-wrap text-center">-->
        <!--                    <div class="col-lg-4 col-md-12 p-0">-->
        <!--                        <div class="form-group analysis-form-group">-->
        <!--                            <span class="analysis-form-input">-->
        <!--                                <input type="url" name="url" size="40" class="form-control"-->
        <!--                                    placeholder="Type website URL">-->
        <!--                            </span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-lg-4 col-md-12 p-0">-->
        <!--                        <div class="form-group analysis-form-group analysis-form-border">-->
        <!--                            <span class="analysis-form-input">-->
        <!--                                <input type="email" name="email" size="40" class="form-control"-->
        <!--                                    placeholder="Your Email">-->
        <!--                            </span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="col-lg-4 col-md-12 p-0">-->
        <!--                        <div class="form-group">-->
        <!--                            <input type="submit" value="Check Now">-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="cta-image d-none d-lg-block d-md-block">-->
        <!--        <img src="img/cta-1-man.svg" width="200" class="img-left" alt="cta">-->
        <!--        <img src="img/cta-1-mike.svg" width="200" class="img-right" alt="cta">-->
        <!--    </div>-->
        <!--</section>-->
        <!--call to action section end-->

        <!--services section start-->
        <section class="services-section ptb-80 gray-light-bg" id="services-overview">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading text-center mb-4">
                            <span class="boutique-badge text-uppercase mb-2" style="letter-spacing: 1px;"><i class="ti-layers-alt mr-1"></i> Full-Spectrum Digital Solutions</span>
                            <h2 class="font-weight-bold" style="font-size: 36px; color: #0f172a;">Engineering High-Impact Digital Growth</h2>
                            <span class="animate-border mr-auto ml-auto mb-3"></span>
                            <p class="lead text-muted" style="font-size: 16px; max-width: 680px; margin: 0 auto;">
                                From bespoke software architecture and high-converting e-commerce to revenue-driving SEO and programmatic ad campaigns, we turn complex digital challenges into scalable enterprise success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Animated Tech & Capability Live Ticker (Full Width on Desktop) -->
    <div class="service-ticker-wrap service-ticker-full-width">
        <div class="service-ticker-track">
            <div class="service-ticker-item"><span class="dot"></span> Custom Web Applications</div>
            <div class="service-ticker-item"><span class="dot"></span> Enterprise SEO &amp; Search Dominance</div>
            <div class="service-ticker-item"><span class="dot"></span> Headless E-Commerce Solutions</div>
            <div class="service-ticker-item"><span class="dot"></span> High-ROI Google &amp; Meta Ads</div>
            <div class="service-ticker-item"><span class="dot"></span> Cloud Infrastructure &amp; DevOps</div>
            <div class="service-ticker-item"><span class="dot"></span> UI/UX Design Systems</div>
            <div class="service-ticker-item"><span class="dot"></span> AI Automation &amp; Data Analytics</div>
            <div class="service-ticker-item"><span class="dot"></span> Cross-Platform Mobile Apps</div>
            <!-- Duplicate for Seamless Continuous Loop -->
            <div class="service-ticker-item"><span class="dot"></span> Custom Web Applications</div>
            <div class="service-ticker-item"><span class="dot"></span> Enterprise SEO &amp; Search Dominance</div>
            <div class="service-ticker-item"><span class="dot"></span> Headless E-Commerce Solutions</div>
            <div class="service-ticker-item"><span class="dot"></span> High-ROI Google &amp; Meta Ads</div>
            <div class="service-ticker-item"><span class="dot"></span> Cloud Infrastructure &amp; DevOps</div>
            <div class="service-ticker-item"><span class="dot"></span> UI/UX Design Systems</div>
            <div class="service-ticker-item"><span class="dot"></span> AI Automation &amp; Data Analytics</div>
            <div class="service-ticker-item"><span class="dot"></span> Cross-Platform Mobile Apps</div>
            <!-- Triplicate for Ultra-Wide / 4K Screens -->
            <div class="service-ticker-item"><span class="dot"></span> Custom Web Applications</div>
            <div class="service-ticker-item"><span class="dot"></span> Enterprise SEO &amp; Search Dominance</div>
            <div class="service-ticker-item"><span class="dot"></span> Headless E-Commerce Solutions</div>
            <div class="service-ticker-item"><span class="dot"></span> High-ROI Google &amp; Meta Ads</div>
            <div class="service-ticker-item"><span class="dot"></span> Cloud Infrastructure &amp; DevOps</div>
            <div class="service-ticker-item"><span class="dot"></span> UI/UX Design Systems</div>
            <div class="service-ticker-item"><span class="dot"></span> AI Automation &amp; Data Analytics</div>
            <div class="service-ticker-item"><span class="dot"></span> Cross-Platform Mobile Apps</div>
        </div>
    </div>

            <div class="container">
                <!-- Services Single-Row Animated Carousel -->
                <div class="owl-carousel owl-theme services-carousel modern-slider-single-row">
                    <!-- Service 1: Custom Software -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-desktop"></span>
                                    </div>
                                    <span class="service-card-pro-tag">Full-Stack</span>
                                </div>
                                <h4 class="service-card-pro-title">Custom Software &amp; Web Apps</h4>
                                <p class="service-card-pro-desc">
                                    Scalable cloud-native architectures, enterprise SaaS portals, and secure API integrations built with modern reactive technologies.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-bolt"></i> 99.9% Uptime</span>
                                <a href="custom-website-development" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Enterprise SEO -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-search"></span>
                                    </div>
                                    <span class="service-card-pro-tag">Organic Growth</span>
                                </div>
                                <h4 class="service-card-pro-title">Enterprise SEO &amp; Authority</h4>
                                <p class="service-card-pro-desc">
                                    Data-backed technical indexing audits, content authority clustering, and algorithmic ranking tactics that dominate high-intent keywords.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-arrow-up"></i> +140% Traffic Lift</span>
                                <a href="seo-services" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Custom Website Design -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-palette"></span>
                                    </div>
                                    <span class="service-card-pro-tag">UI / UX</span>
                                </div>
                                <h4 class="service-card-pro-title">Modern Web Design &amp; UI/UX</h4>
                                <p class="service-card-pro-desc">
                                    Aesthetic, human-centered digital experiences with interactive micro-animations, accessible design systems, and seamless brand storytelling.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-check"></i> Sub-Second Speed</span>
                                <a href="custom-website-design" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4: E-Commerce -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-shopping-cart"></span>
                                    </div>
                                    <span class="service-card-pro-tag">E-Commerce</span>
                                </div>
                                <h4 class="service-card-pro-title">E-Commerce Architecture</h4>
                                <p class="service-card-pro-desc">
                                    High-throughput storefronts engineered on Shopify, WooCommerce, and headless stacks with streamlined checkouts and high conversion rates.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-stats-up"></i> 3.2x Conversion</span>
                                <a href="ecommerce-web-development" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5: Local SEO -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-location-pin"></span>
                                    </div>
                                    <span class="service-card-pro-tag">Geo Authority</span>
                                </div>
                                <h4 class="service-card-pro-title">Local SEO &amp; Map Pack</h4>
                                <p class="service-card-pro-desc">
                                    Geotargeted search domination, Google Business Profile optimization, and local review funnels turning local searches into paying customers.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-target"></i> Top 3 Google Map</span>
                                <a href="local-seo-services" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6: PPC & Paid Ads -->
                    <div class="item">
                        <div class="service-card-pro">
                            <div>
                                <div class="service-card-pro-header">
                                    <div class="service-card-pro-icon">
                                        <span class="ti-bar-chart"></span>
                                    </div>
                                    <span class="service-card-pro-tag">Paid Media</span>
                                </div>
                                <h4 class="service-card-pro-title">PPC &amp; Google Ads Scale</h4>
                                <p class="service-card-pro-desc">
                                    High-performance search, display, and social ad campaigns laser-targeted on bottom-of-funnel conversions, optimal CPA, and maximum ROAS.
                                </p>
                            </div>
                            <div class="service-card-pro-footer">
                                <span class="service-metric-pill"><i class="ti-pie-chart"></i> 4.8x Avg ROAS</span>
                                <a href="google-ads-management" class="service-pro-link">
                                    Explore Service <span class="ti-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--services section end-->

        <!--solving digital growth section start-->
        <section class="growth-section-modern">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center">
                        <span class="growth-challenge-label mb-2">VALUE PROPOSITION</span>
                        <h2 class="font-weight-bold" style="font-size: 36px; color: #0f172a;">Solving Your Digital Growth Bottlenecks</h2>
                        <span class="animate-border mr-auto ml-auto mb-3"></span>
                        <p class="lead text-muted" style="font-size: 16px;">
                            We transform common technical friction points and marketing inefficiencies into competitive growth advantages for your enterprise.
                        </p>
                    </div>
                </div>

                <div class="owl-carousel owl-theme bottlenecks-carousel modern-slider-single-row">
                    <!-- Card 1 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-layer-group"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: OUTDATED TECH</span>
                            <h3 class="growth-card-title">Legacy Systems Holding You Back?</h3>
                            <p class="growth-card-desc">
                                Modernize your architecture with clean, scalable web apps and cloud-native backend infrastructure designed for performance.
                            </p>
                            <a href="custom-website-development.php" class="growth-card-link">
                                Explore Custom Development <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-search-dollar"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: LOW TRAFFIC</span>
                            <h3 class="growth-card-title">Losing High-Intent Leads on Search?</h3>
                            <p class="growth-card-desc">
                                Capture market share with technical SEO audits, keyword targeting, and local search dominance engineered for ROI.
                            </p>
                            <a href="seo-services.php" class="growth-card-link">
                                Explore SEO Solutions <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-cogs"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: MANUAL PROCESSES</span>
                            <h3 class="growth-card-title">Manual Tasks Draining Resources?</h3>
                            <p class="growth-card-desc">
                                Automate internal workflows, customer touchpoints, and integrations with tailored AI-assisted software solutions.
                            </p>
                            <a href="custom-website-design.php" class="growth-card-link">
                                Explore Workflow Automation <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-bullseye"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: AD WASTAGE</span>
                            <h3 class="growth-card-title">Paid Ads Not Delivering Target ROI?</h3>
                            <p class="growth-card-desc">
                                Eliminate ad spend waste with hyper-targeted Google Ads, Amazon PPC, and paid social campaigns backed by conversion tracking.
                            </p>
                            <a href="google-ads-management.php" class="growth-card-link">
                                Explore PPC Management <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-shopping-cart"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: ECOMMERCE DROP-OFF</span>
                            <h3 class="growth-card-title">Cart Abandonment &amp; Friction?</h3>
                            <p class="growth-card-desc">
                                Optimize storefront UX, checkout speed, and product discoverability to turn shoppers into repeat buyers.
                            </p>
                            <a href="ecommerce-web-development.php" class="growth-card-link">
                                Explore E-Commerce Growth <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="item">
                        <div class="growth-card">
                            <div class="growth-card-icon">
                                <span class="fas fa-chart-line"></span>
                            </div>
                            <span class="growth-challenge-label">CHALLENGE: ROADMAP UNCLEAR</span>
                            <h3 class="growth-card-title">Launching a Venture or Scaling?</h3>
                            <p class="growth-card-desc">
                                Partner with senior technology consultants to define product roadmaps, tech stacks, and scalable growth strategies.
                            </p>
                            <a href="contact-us.php" class="growth-card-link">
                                Schedule Tech Consultation <span class="fas fa-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--solving digital growth section end-->

        <!--work process section start-->
        <!--<section class="work-process-section ptb-100 gray-light-bg">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-10 col-lg-9">-->
        <!--                <div class="section-heading text-center">-->
        <!--                    <strong class="color-secondary">Work Process</strong>-->
        <!--                    <h2>We follow Few Steps</h2>-->
        <!--                    <span class="animate-border mr-auto ml-auto mb-4"></span>-->
        <!--                    <p class="lead">Globally reinvent cross-unit human capital whereas virtual catalysts for-->
        <!--                        change. Assertively-->
        <!--                        network accurate methods of empowerment rather than client-centered improvements.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- ============ step 1 =========== -->
        <!--        <div class="row mt-5">-->
        <!--            <div class="col-md-12 col-lg-5 process-width">-->
        <!--                <div class="process-box process-left">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <div class="process-step-number">-->
        <!--                                <strong>Step</strong>-->
        <!--                                <h2 class="m-0">01</h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <h5>Technical Audit</h5>-->
        <!--                            <p>Monotonectally optimize granular quality vectors vis-a-vis interdependent.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="process-line-l"></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-2 process-none"></div>-->
        <!--            <div class="col-md-5 col-md-5 col-lg-5 process-none">-->
        <!--                <div class="process-point-right"></div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- ============ step 2 =========== -->
        <!--        <div class="row">-->
        <!--            <div class="col-md-5 col-lg-5 process-none">-->
        <!--                <div class="process-point-left"></div>-->
        <!--            </div>-->
        <!--            <div class="col-md-2 process-none"></div>-->
        <!--            <div class="col-md-12 col-lg-5 process-width">-->
        <!--                <div class="process-box process-right">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <div class="process-step-number">-->
        <!--                                <strong>Step</strong>-->
        <!--                                <h2 class="m-0">02</h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <h5>Technical SEO</h5>-->
        <!--                            <p>Completely synthesize one-to-one interfaces vis-a-vis client-focused alignments.-->
        <!--                            </p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="process-line-r"></div>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </div>-->
                <!-- ============ step 3 =========== -->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12 col-lg-5 process-width">-->
        <!--                <div class="process-box process-left">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <div class="process-step-number">-->
        <!--                                <strong>Step</strong>-->
        <!--                                <h2 class="m-0">03</h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <h5>Select Keywords</h5>-->
        <!--                            <p>Progressively streamline cooperative sources whereas stand-alone channels.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="process-line-l"></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-2 process-none"></div>-->
        <!--            <div class="col-md-5 col-lg-5 process-none">-->
        <!--                <div class="process-point-right"></div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- ============ step 4 =========== -->
        <!--        <div class="row">-->
        <!--            <div class="col-md-5 col-lg-5 process-none">-->
        <!--                <div class="process-point-left"></div>-->
        <!--            </div>-->
        <!--            <div class="col-md-2 process-none"></div>-->
        <!--            <div class="col-md-12 col-lg-5 process-width">-->
        <!--                <div class="process-box process-right">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <div class="process-step-number">-->
        <!--                                <strong>Step</strong>-->
        <!--                                <h2 class="m-0">04</h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <h5>Demographics</h5>-->
        <!--                            <p>Objectively underwhelm one-to-one deliverables whereas impactful solutions. </p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="process-line-r"></div>-->
        <!--                </div>-->
        <!--            </div>-->


        <!--        </div>-->
                <!-- ============ step 3 =========== -->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12 col-lg-5 process-width">-->
        <!--                <div class="process-box process-left">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-5">-->
        <!--                            <div class="process-step-number">-->
        <!--                                <strong>Step</strong>-->
        <!--                                <h2 class="m-0">05</h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <h5>Engine Ranking</h5>-->
        <!--                            <p>Interactively seize innovative platforms vis-a-vis ubiquitous portals.</p>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <div class="process-line-l"></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-2 custom-none"></div>-->
        <!--            <div class="col-md-5 col-lg-5 custom-none">-->
        <!--                <div class="process-point-right process-last"></div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!-- ============ -->
        <!--    </div>-->
        <!--</section>-->
        <!--work process section end-->


        <!--outstanding section start-->
        <!--<section class="outstanding-section ptb-100 gray-light-bg">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-9 col-lg-8">-->
        <!--                <div class="section-heading text-center mb-1">-->
        <!--                    <strong class="color-secondary">Our Expertise</strong>-->
        <!--                    <h2>Outstanding Experience</h2>-->
        <!--                    <span class="animate-border mr-auto ml-auto mb-4"></span>-->
        <!--                    <p class="lead">Distinctively grow go forward manufactured products and optimal networks.-->
        <!--                        Enthusiastically-->
        <!--                        disseminate user-centric outsourcing revolutionary</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-12 col-lg-12">-->
        <!--                <div class="feature-tabs-wrap">-->
        <!--                    <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center"-->
        <!--                        data-tabs="tabs">-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link text-center" href="#feature-tab-1" data-toggle="tab">-->
        <!--                                <span class="ti-announcement icon-sm"></span>-->
        <!--                                <h6 class="mb-0">Digital Marketing</h6>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link text-center" href="#feature-tab-2" data-toggle="tab">-->
        <!--                                <span class="ti-light-bulb icon-sm"></span>-->
        <!--                                <h6 class="mb-0">SEO Services</h6>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link text-center active" href="#feature-tab-3" data-toggle="tab">-->
        <!--                                <span class="ti-email icon-sm"></span>-->
        <!--                                <h6 class="mb-0">Email Marketing</h6>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link text-center" href="#feature-tab-4" data-toggle="tab">-->
        <!--                                <span class="ti-shield icon-sm"></span>-->
        <!--                                <h6 class="mb-0">Social Media</h6>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link text-center" href="#feature-tab-5" data-toggle="tab">-->
        <!--                                <span class="ti-vector icon-sm"></span>-->
        <!--                                <h6 class="mb-0">Web Design</h6>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                    <div class="tab-content feature-tab-content">-->
        <!--                        <div class="tab-pane mt-5" id="feature-tab-1">-->
        <!--                            <div class="row justify-content-around">-->
        <!--                                <div class="col-md-12 col-lg-5">-->
        <!--                                    <div class="about-content-right mb-md-4 mb-lg-0 my-md-3 my-lg-3 my-sm-0">-->
        <!--                                        <p>Objectively productivate installed base technology whereas user-->
        <!--                                            friendly-->
        <!--                                            ROI.-->
        <!--                                            Phosfluorescently innovate functionalized potentialities-->
        <!--                                            revolutionize-->
        <!--                                            client-based applications.</p>-->

        <!--                                        <p>Holisticly utilize emerging leadership skills whereas multifunctional-->
        <!--                                            customer service. Energistically functional bandwidth without-->
        <!--                                            granular-->
        <!--                                            mindshare. Monotonectally visualize user-centric methodologies-->
        <!--                                            low-risk.</p>-->

        <!--                                        <ul class="list-unstyled tech-feature-list">-->
        <!--                                            <li class="py-1"><span-->
        <!--                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>-->
        <!--                                                Cash Management-->
        <!--                                            </li>-->
        <!--                                            <li class="py-1"><span-->
        <!--                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>-->
        <!--                                                Optimization Services-->
        <!--                                            </li>-->
        <!--                                            <li class="py-1"><span-->
        <!--                                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>-->
        <!--                                                Brand Solutions-->
        <!--                                            </li>-->
        <!--                                        </ul>-->

        <!--                                        <a href="#" class="mt-4 btn secondary-solid-btn">Contact With Us</a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-md-12 col-lg-6">-->
        <!--                                    <div class="img-wrap my-md-3 my-lg-3 my-sm-0">-->
        <!--                                        <img src="img/about-1.jpg" alt="about"-->
        <!--                                            class="img-fluid rounded shadow-sm">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane mt-5" id="feature-tab-2">-->
        <!--                            <div class="row align-items-center justify-content-between">-->
        <!--                                <div class="col-md-6 col-lg-5">-->
        <!--                                    <div class="why-choose-us-wrap">-->
        <!--                                        <h3>Best Consulting Every For Business</h3>-->
        <!--                                        <p>Globally reinvent cross-unit human capital whereas virtual catalysts-->
        <!--                                            for change. Assertively-->
        <!--                                            network accurate methods of empowerment rather than client-centered-->
        <!--                                            improvements.</p>-->
        <!--                                        <ul class="list-with-icon">-->
        <!--                                            <li class="d-flex align-items-start">-->
        <!--                                                <img src="img/increase.svg" width="35" class="mr-3"-->
        <!--                                                    alt="list icon">-->
        <!--                                                <div class="list-icon-info">-->
        <!--                                                    <strong>Increased Traffic</strong>-->
        <!--                                                    <p>Conveniently provide access to diverse sources vis-a-vis-->
        <!--                                                        team building customer service. </p>-->
        <!--                                                </div>-->
        <!--                                            </li>-->
        <!--                                            <li class="d-flex align-items-start">-->
        <!--                                                <img src="img/search-engine.svg" width="35" class="mr-3"-->
        <!--                                                    alt="list icon">-->
        <!--                                                <div class="list-icon-info">-->
        <!--                                                    <strong>Site Optimisation</strong>-->
        <!--                                                    <p>Efficiently fashion ethical customer service with highly-->
        <!--                                                        efficient methods of empowerment. </p>-->
        <!--                                                </div>-->
        <!--                                            </li>-->
        <!--                                            <li class="d-flex align-items-start">-->
        <!--                                                <img src="img/interface.svg" width="35" class="mr-3"-->
        <!--                                                    alt="list icon">-->
        <!--                                                <div class="list-icon-info">-->
        <!--                                                    <strong>Page Rankings</strong>-->
        <!--                                                    <p>Quickly fashion high-quality innovation for cutting-edge-->
        <!--                                                        sources assertively reinvent inexpensive. </p>-->
        <!--                                                </div>-->
        <!--                                            </li>-->
        <!--                                        </ul>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-md-6 col-lg-6">-->
        <!--                                    <div class="image-wrap">-->
        <!--                                        <img src="img/t6-hero-img1.svg" alt="why choose us" class="img-fluid">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane active mt-5" id="feature-tab-3">-->
        <!--                            <div class="row align-items-center">-->
        <!--                                <div class="col-lg-6 col-md-6">-->
        <!--                                    <div class="image-wrap">-->
        <!--                                        <img src="img/tab-img.png" alt="email" class="img-fluid m-auto">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-6 col-md-6">-->
        <!--                                    <div class="content-wrap">-->
        <!--                                        <h3>Grow Your Business With Experienced SEO Experts</h3>-->
        <!--                                        <p>Intrinsicly recaptiualize alternative internal or "organic" sources-->
        <!--                                            for-->
        <!--                                            inexpensive outsourcing. Monotonectally create sustainable-->
        <!--                                            applications-->
        <!--                                            before premier vortals. Holisticly productivate stand-alone value-->
        <!--                                            and-->
        <!--                                            cost effective users. </p>-->
        <!--                                        <p>Holisticly syndicate cooperative ideas after pandemic human capital.-->
        <!--                                            Professionally provide access to bricks-and-clicks functionalities-->
        <!--                                            for-->
        <!--                                            visionary customer service. Completely reconceptualize cross-media-->
        <!--                                            data-->
        <!--                                            for frictionless architectures. </p>-->

        <!--                                        <div class="action-btns mt-4">-->
        <!--                                            <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>-->
        <!--                                            <a href="#" class="btn secondary-outline-btn">Learn More</a>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane mt-5" id="feature-tab-4">-->
        <!--                            <div class="row align-items-center">-->
        <!--                                <div class="col-lg-6 col-md-6">-->
        <!--                                    <div class="content-wrap">-->
        <!--                                        <h3>Grow Your Business With Experienced SEO Experts</h3>-->
        <!--                                        <p>Intrinsicly recaptiualize alternative internal or "organic" sources-->
        <!--                                            for-->
        <!--                                            inexpensive outsourcing. Monotonectally create sustainable-->
        <!--                                            applications-->
        <!--                                            before premier vortals. Holisticly productivate stand-alone value-->
        <!--                                            and-->
        <!--                                            cost effective users. </p>-->
        <!--                                        <p>Holisticly syndicate cooperative ideas after pandemic human capital.-->
        <!--                                            Professionally provide access to bricks-and-clicks functionalities-->
        <!--                                            for-->
        <!--                                            visionary customer service. Completely reconceptualize cross-media-->
        <!--                                            data-->
        <!--                                            for frictionless architectures. </p>-->

        <!--                                        <div class="action-btns mt-4">-->
        <!--                                            <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>-->
        <!--                                            <a href="#" class="btn secondary-outline-btn">Learn More</a>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-6 col-md-6">-->
        <!--                                    <div class="image-wrap">-->
        <!--                                        <img src="img/tab-img.png" alt="email" class="img-fluid m-auto">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="tab-pane mt-5" id="feature-tab-5">-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span class="ti-announcement icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>Marketing Services</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span class="ti-light-bulb icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>Total SEO Services</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span-->
        <!--                                            class="ti-headphone-alt icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>24/7 Call Center Service</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span class="ti-bell icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>Social Media Marketing</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span class="ti-briefcase icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>Corporate Business</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                                    <div-->
        <!--                                        class="services-single p-5 my-md-3 my-lg-3 my-sm-0 white-bg shadow-sm rounded">-->
        <!--                                        <span class="ti-vector icon-lg color-primary d-block mb-4"></span>-->
        <!--                                        <h5>Creative Consultancy</h5>-->
        <!--                                        <p class="mb-0">Progressively empower business "outside the box"-->
        <!--                                            thinking-->
        <!--                                            with resource-leveling-->
        <!--                                            partnerships.</p>-->
        <!--                                        <a href="services-details.php" target="_blank"-->
        <!--                                            class="detail-link mt-4">Read-->
        <!--                                            more <span class="ti-arrow-right"></span></a>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--outstanding section end-->

        <!--our portfolio section start-->
        <section class="our-portfolio-section pb-100 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <span class="growth-challenge-label mb-2">FEATURED WORK</span>
                            <h2 class="font-weight-bold" style="font-size: 36px; color: #0f172a;">Our Portfolio</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead text-muted" style="font-size: 16px;">
                                Explore our curated showcase of custom web development, digital growth campaigns, and enterprise technology solutions built for performance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="portfolio-grid-modern">
                            <!-- Project 1 -->
                            <div>
                                <a href="project" class="portfolio-card-modern">
                                    <div class="portfolio-img-container">
                                        <img src="img/portfolios/3.jpg" alt="Enterprise SaaS Web App" />
                                        <span class="portfolio-tag-badge">Web Application</span>
                                    </div>
                                    <div class="portfolio-card-body">
                                        <h3 class="portfolio-card-title">Enterprise SaaS Web Platform</h3>
                                        <p class="portfolio-card-category">Custom Software & Cloud Architecture</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Project 2 -->
                            <div>
                                <a href="project" class="portfolio-card-modern">
                                    <div class="portfolio-img-container">
                                        <img src="img/portfolios/2.jpg" alt="E-Commerce D2C Brand Store" />
                                        <span class="portfolio-tag-badge">E-Commerce</span>
                                    </div>
                                    <div class="portfolio-card-body">
                                        <h3 class="portfolio-card-title">Global D2C Storefront</h3>
                                        <p class="portfolio-card-category">Full-stack E-Commerce & Checkout Optimization</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Project 3 -->
                            <div>
                                <a href="project" class="portfolio-card-modern">
                                    <div class="portfolio-img-container">
                                        <img src="img/portfolios/4.jpg" alt="Local Services SEO Campaign" />
                                        <span class="portfolio-tag-badge">SEO & Marketing</span>
                                    </div>
                                    <div class="portfolio-card-body">
                                        <h3 class="portfolio-card-title">Legal Services Organic Growth</h3>
                                        <p class="portfolio-card-category">Technical SEO & Conversion Optimization</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Button to View Full Portfolio Page -->
                        <div class="text-center mt-5">
                            <a href="project" class="btn secondary-solid-btn px-4 py-3" style="border-radius: 8px; font-weight: 600; font-size: 15px;">
                                View All Projects in Our Portfolio <span class="ti-arrow-right ml-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our portfolio section end-->

        <!--pricing with switch section start-->
       <!-- <section class="pricing-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Our Pricing</strong>
                            <h2>Flexible Price</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">
                                Professional hosting at an affordable price. Distinctively recaptiualize
                                principle-centered
                                core competencies through client-centered
                                core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="switch-wrap text-center mb-5">
                            <label class="form-switch">
                                <span class="beforeinput text-success year-switch">
                                    Monthly
                                </span>
                                <input type="checkbox" id="js-contcheckbox">
                                <span class="switch-icon gray-light-bg"></span>
                                <span class="afterinput year-switch">
                                    Yearly
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="price-img pt-5">
                                <img src="img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$499</div>
                                <div class="price text-center mb-0 yearly-price">$449</div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Standard</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Track 15</span> Keywords with our tool</li>
                                    <li><span>50</span> Page Analysis</li>
                                    <li><span>50</span> Crawl Pages with our crawl</li>
                                    <li><span>1</span> Project to optimize site</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="price-img pt-5">
                                <img src="img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$799</div>
                                <div class="price text-center mb-0 yearly-price">$719</div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Premium</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Track 15o</span> Keywords with our tool</li>
                                    <li><span>100</span> Page Analysis</li>
                                    <li><span>100</span> Crawl Pages with our crawl</li>
                                    <li><span>5</span> Project to optimize site</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="price-img pt-5">
                                <img src="img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">$999</div>
                                <div class="price text-center mb-0 yearly-price">$899</div>
                            </div>
                            <div class="price-name">
                                <h5 class="mb-0">Unlimited</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>Track 500</span> Keywords with our tool</li>
                                    <li><span>250</span> Page Analysis</li>
                                    <li><span>250</span> Crawl Pages with our crawl</li>
                                    <li><span>10</span> Project to optimize site</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <h5 class="mb-1"><span class="ti-headphone-alt color-primary mr-3"></span>We're Here to Help
                                You
                            </h5>
                            <p>Have some questions? <a href="#">Chat with us now</a>, or <a href="#">send us an
                                    email</a> to
                                get in touch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing with switch section end-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-100"
            style="background: url('img/testimonial-bg.png')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="testimonial-heading text-white">
                            <h2 class="text-white">What Our Client Say About Us</h2>
                            <span class="animate-border mb-4"></span>
                            <p>Collaboratively actualize excellent schemas without effective models. Synergistically
                                engineer functionalized applications rather than backend e-commerce.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="testimonial-content-wrap">
                            <img src="img/testimonial-arrow-top.png" class="img-fluid testimonial-tb-shape shape-top"
                                alt="testimonial shape">
                            <div class="owl-carousel owl-theme client-testimonial-1 custom-dot testimonial-shape">
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="img/client-1.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>BizBite</span>
                                            </div>
                                            <span class="fas fa-quote-right icon-md text-white"></span>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Interactively optimize
                                                fully researched expertise vis-a-vis plug-and-play relationships.
                                                Intrinsicly
                                                develop viral core competencies for fully tested customer service.
                                                Enthusiastically create next-generation growth strategies and.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="img/client-2.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Arabella Ora</h5>
                                                <span>BizBite</span>
                                            </div>
                                            <span class="fas fa-quote-right icon-md text-white"></span>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Rapidiously develop user
                                                friendly growth strategies after extensive initiatives. Conveniently
                                                grow
                                                innovative benefits through fully tested deliverables. Rapidiously
                                                utilize
                                                focused platforms through end-to-end schemas.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="img/client-3.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Jeremy Jere</h5>
                                                <span>BizBite</span>
                                            </div>
                                            <span class="fas fa-quote-right icon-md text-white"></span>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Objectively synthesize
                                                client-centered e-tailers for maintainable channels. Holisticly
                                                administrate
                                                customer directed vortals whereas tactical functionalities.
                                                Energistically
                                                monetize reliable imperatives through client-centric best practices.
                                                Collaboratively.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="img/client-4.jpg" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>BizBite</span>
                                            </div>
                                            <span class="fas fa-quote-right icon-md text-white"></span>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Enthusiastically innovate
                                                B2C data without clicks-and-mortar convergence. Monotonectally deliver
                                                compelling testing procedures vis-a-vis B2B testing procedures.
                                                Competently
                                                evisculate integrated resources whereas global processes.
                                                Enthusiastically.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="img/testimonial-arrow-bottom.png"
                                class="img-fluid testimonial-tb-shape shape-bottom" alt="testimonial shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

                        <!-- Client Testimonials Section (Moving Left to Right Carousel) -->
        <section class="hp-testimonials ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center mb-5">
                        <span class="growth-challenge-label mb-2">TESTIMONIALS</span>
                        <h2 class="hp-section-title font-weight-bold" style="font-size: 36px; color: #0f172a;">Who Are Happy With Our Services</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="hp-section-subtitle text-muted" style="font-size: 16px;">
                            See how we've helped companies across North America, Australia, and Asia achieve measurable digital growth.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-dot">
                            <!-- Testimonial 1: EatClub -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">EatClub</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Ocean DigiTech helped us improve visibility into campaign performance and user behavior. Their technical audit clarified where we were losing efficiency and helped us improve lead quality within weeks."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-1.jpg" alt="Sarah L." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Sarah L.</div>
                                            <div class="testimonial-author-role">Marketing Lead, Food & Hospitality (Australia)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2: Juniper -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">Juniper</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "The audit highlighted conversion and performance gaps we had overlooked. The recommendations were clear, practical, and helped improve engagement and inbound inquiries."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-2.jpg" alt="Daniel R." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Daniel R.</div>
                                            <div class="testimonial-author-role">Growth Manager, Consumer Brand (USA)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3: Padra -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">Padra</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Ocean DigiTech helped us identify inefficiencies across our website and paid campaigns. After implementing their suggestions, conversions became more consistent and predictable."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-3.jpg" alt="Ayesha K." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Ayesha K.</div>
                                            <div class="testimonial-author-role">Founder, D2C Brand (USA)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 4: Sightseeing Tours -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">Sightseeing Tours</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Their audit gave us a clear roadmap to fix tracking issues and improve campaign performance. The insights were easy to execute and had a direct impact on bookings."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-4.jpg" alt="Mark T." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Mark T.</div>
                                            <div class="testimonial-author-role">Operations Director (Australia)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 5: Blende Dental -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">Blende Dental</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Their healthcare digital strategy and patient journey optimization drove a noticeable increase in qualified appointment requests across our multi-location clinics."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-1.jpg" alt="Dr. Marcus B." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Dr. Marcus B.</div>
                                            <div class="testimonial-author-role">Clinical Director (USA)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 6: Pacific Legal -->
                            <div class="item">
                                <div class="hp-testimonial-card-modern">
                                    <div>
                                        <div class="testimonial-company-header">
                                            <span class="testimonial-company-badge">Pacific Legal</span>
                                            <span class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Ocean DigiTech's team revamped our digital architecture and SEO structure. Our high-intent legal inquiries grew by 85% within four months."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-3.jpg" alt="Elena K." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Elena K.</div>
                                            <div class="testimonial-author-role">Partner (USA)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Testimonials Section End -->
        <!-- Client Testimonials Grid Section End -->

        <!--team section start-->
        <section class="team-two-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center mb-5">
                        <span class="growth-challenge-label mb-2">EXPERIENCED LEADERSHIP</span>
                        <h2 class="font-weight-bold" style="font-size: 36px; color: #0f172a;">Awesome Team Members</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead text-muted" style="font-size: 16px;">
                            Meet the digital architects, designers, and growth strategists driving innovative enterprise digital transformations.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-1.png" alt="Vikas Giri" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Vikas Giri</h5>
                                <div class="team-card-role">Technology Strategist</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Enterprise digital architecture and high-performance software engineering.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-2.png" alt="Kely Roy" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Kely Roy</h5>
                                <div class="team-card-role">Lead UI/UX Designer</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Crafting intuitive user interfaces and modern visual design systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-3.png" alt="Gerald Nichols" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Gerald Nichols</h5>
                                <div class="team-card-role">Managing Director</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Driving corporate strategy, global partnerships, and client growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-4.png" alt="Alex Morgan" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Alex Morgan</h5>
                                <div class="team-card-role">Senior Full Stack Lead</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Building resilient cloud backends, clean APIs, and modern web apps.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team section end-->

        <!--blog section start-->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center">
                        <span class="growth-challenge-label mb-2">INSIGHTS & STRATEGY</span>
                        <h2 class="font-weight-bold" style="font-size: 36px; color: #0f172a;">Our Latest Blog</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead text-muted" style="font-size: 16px;">
                            Stay updated with expert perspectives on AI-driven software architecture, technical SEO, digital marketing strategies, and B2B growth.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="blog-card-modern">
                            <div class="blog-card-img-wrap">
                                <img src="img/blog/1.jpg" alt="AI in Modern Web Architecture">
                                <span class="portfolio-tag-badge">Web Architecture</span>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                    <span><i class="far fa-calendar-alt mr-1"></i> October 2026</span>
                                    <span><i class="far fa-clock mr-1"></i> 5 min read</span>
                                </div>
                                <h3 class="blog-card-title">
                                    <a href="blog.php">Building Resilient & Scalable Web Architectures for B2B Growth</a>
                                </h3>
                                <p class="blog-card-excerpt">
                                    Discover how modern decoupled systems, clean API integration, and cloud-native backends drive speed and security.
                                </p>
                                <a href="blog.php" class="growth-card-link">
                                    Read Full Article <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="blog-card-modern">
                            <div class="blog-card-img-wrap">
                                <img src="img/blog/2.jpg" alt="Technical SEO Strategies">
                                <span class="portfolio-tag-badge">SEO & Growth</span>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                    <span><i class="far fa-calendar-alt mr-1"></i> September 2026</span>
                                    <span><i class="far fa-clock mr-1"></i> 7 min read</span>
                                </div>
                                <h3 class="blog-card-title">
                                    <a href="blog.php">Technical SEO Checklist to Maximize Organic Lead Generation</a>
                                </h3>
                                <p class="blog-card-excerpt">
                                    Learn key audit parameters, structured data strategies, and site speed optimizations that convert search traffic into real pipeline.
                                </p>
                                <a href="blog.php" class="growth-card-link">
                                    Read Full Article <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-card-modern">
                            <div class="blog-card-img-wrap">
                                <img src="img/blog/3.jpg" alt="Paid Ads ROI">
                                <span class="portfolio-tag-badge">Paid Media</span>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                    <span><i class="far fa-calendar-alt mr-1"></i> September 2026</span>
                                    <span><i class="far fa-clock mr-1"></i> 4 min read</span>
                                </div>
                                <h3 class="blog-card-title">
                                    <a href="blog.php">Eliminating Ad Spend Waste in Google & Amazon PPC Campaigns</a>
                                </h3>
                                <p class="blog-card-excerpt">
                                    Actionable tactics to optimize bidding algorithms, negative keywords, and landing page funnels for maximum ROAS.
                                </p>
                                <a href="blog.php" class="growth-card-link">
                                    Read Full Article <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section end-->

        <!--call to action section start-->
        <section class="call-to-action py-5" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%);">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7 text-white">
                        <div class="subscribe-content">
                            <h3 class="mb-2 text-white font-weight-bold">Ready to Scale Your Digital Growth?</h3>
                            <p class="mb-0" style="color: #cbd5e1;">Partner with Ocean Digitech for enterprise web applications, mobile engineering, and data-backed performance marketing.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-0">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="contact-us.php" class="btn secondary-solid-btn" style="padding: 14px 28px; font-weight: 600; border-radius: 8px;">Request Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

    </div>
    <!--body content wrap end-->


    <!--footer section start-->
  <?php include('footer.php');?>
    <!--bottom to top button end-->


    <!--jQuery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!--Popper js-->
    <script src="js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--Magnific popup js-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--jquery easing js-->
    <script src="js/jquery.easing.min.js"></script>
    <!--jquery ytplayer js-->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!--Isotope filter js-->
    <script src="js/mixitup.min.js"></script>
    <!--wow js-->
    <script src="js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--countdown js-->
    <script src="js/jquery.countdown.min.js"></script>
    <!--jquery easypiechart-->
    <script src="js/jquery.easy-pie-chart.js"></script>
    <!--custom js-->
    <script src="js/scripts.js?v=<?php echo file_exists('js/scripts.js') ? filemtime('js/scripts.js') : '2.2'; ?>"></script>
</body>

</html>