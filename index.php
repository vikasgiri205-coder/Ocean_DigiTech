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
    <meta name="description"
        content="BizBite corporate business template or agency and marketing template helps you easily create websites for your business.">
    <meta name="author" content="ThemeTags">

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
    <link rel="stylesheet" href="css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

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
        <section class="hero-modern-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="hero-slider-content text-white">
                            <div class="hero-pill-badge">
                                <span class="fas fa-sparkles"></span> AI-POWERED DIGITAL TRANSFORMATION
                            </div>
                            <h1 class="hero-heading-title">
                                Scalable Software Engineering & Modern Digital Growth
                            </h1>
                            <p class="hero-lead-desc">
                                We engineer high-performing web apps, custom software platforms, and data-driven digital growth strategies for B2B enterprises and ambitious startups.
                            </p>

                            <div class="action-btns mt-4">
                                <div class="quick-proposal d-flex align-items-center flex-wrap" style="gap:10px;">
                                    <input type="text" id="businessName" placeholder="Enter your email or domain" required style="padding:14px 18px; border-radius:8px; border:1px solid rgba(255,255,255,0.25); background:rgba(255,255,255,0.95); min-width:260px; color:#1e293b;" />
                                    <button type="button" onclick="sendProposal()" class="btn-primary-od">
                                        Get Free Proposal <span class="fas fa-arrow-right ml-1"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                        <div class="hero-visual-card text-center p-3">
                            <img src="img/t1-hero-img.svg" class="img-fluid" alt="Digital Engineering & Growth" style="max-height: 420px; width: auto;" />
                            <div class="hero-floating-badge d-none d-sm-flex">
                                <span class="fas fa-check-circle text-success" style="font-size: 24px;"></span>
                                <div class="text-left">
                                    <div style="font-size: 15px; font-weight: 700; color: #ffffff;">98% Client Retention</div>
                                    <div style="font-size: 12px; color: #94a3b8;">Proven B2B Results</div>
                                </div>
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
                            <h3 class="mb-0 font-weight-bold color-primary">40+</h3>
                            <span class="text-muted text-left font-weight-bold" style="font-size: 13px; line-height: 1.2;">Global<br>Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0 text-center">
                        <img src="img/cluch.jpg" alt="Clutch Verified Agency" class="trust-badge-img">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <img src="img/tech-behemoths.png" alt="Tech Behemoths Top Agency" class="trust-badge-img">
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <img src="img/top-developers.png" alt="Top Developers Award" class="trust-badge-img">
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
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="boutique-visual-container">
                            <!-- Floating Top Badge -->
                            <div class="boutique-float-badge badge-top">
                                <div style="width: 38px; height: 38px; border-radius: 10px; background: rgba(0, 210, 255, 0.15); display: flex; align-items: center; justify-content: center; color: #00d2ff; font-size: 18px;">
                                    <span class="ti-rocket"></span>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 14px; font-weight: 700; color: #0b132b;">99.8% On-Time</h6>
                                    <small style="color: #64748b; font-size: 11px;">Milestone Delivery</small>
                                </div>
                            </div>

                            <!-- Center Holographic Interactive Card -->
                            <div class="boutique-card-center">
                                <div class="boutique-icon-sphere">
                                    <span class="ti-world"></span>
                                </div>
                                <span class="badge badge-pill px-3 py-1 mb-3" style="background: rgba(0, 210, 255, 0.2); color: #00d2ff; font-size: 12px; font-weight: 600;">CROSS-CONTINENTAL HUBS</span>
                                <h4 class="text-white mb-2" style="font-weight: 700;">Global Digital Engine</h4>
                                <p style="color: #94a3b8; font-size: 14px; line-height: 1.6; margin-bottom: 24px;">
                                    Dual engineering hubs in the United States and India driving agile development, 24/7 coverage, and unmatched ROI.
                                </p>
                                
                                <div class="d-flex justify-content-between align-items-center pt-3" style="border-top: 1px solid rgba(255,255,255,0.1);">
                                    <div class="text-left">
                                        <small style="color: #64748b; font-size: 11px; text-transform: uppercase;">Engineered For</small>
                                        <div class="text-white font-weight-bold" style="font-size: 13px;">High-Growth Scale</div>
                                    </div>
                                    <div class="text-right">
                                        <small style="color: #64748b; font-size: 11px; text-transform: uppercase;">Methodology</small>
                                        <div style="color: #00d2ff; font-weight: 700; font-size: 13px;">Agile + Data-First</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Bottom Badge -->
                            <div class="boutique-float-badge badge-bottom">
                                <div style="width: 38px; height: 38px; border-radius: 10px; background: rgba(232, 5, 102, 0.15); display: flex; align-items: center; justify-content: center; color: #e80566; font-size: 18px;">
                                    <span class="ti-shield"></span>
                                </div>
                                <div>
                                    <h6 class="mb-0" style="font-size: 14px; font-weight: 700; color: #0b132b;">Enterprise Grade</h6>
                                    <small style="color: #64748b; font-size: 11px;">Security & Architecture</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="pl-lg-4">
                            <span class="badge badge-pill px-3 py-2 text-uppercase font-weight-bold mb-3" style="background: rgba(232, 5, 102, 0.1); color: #e80566; letter-spacing: 1px; font-size: 11px;">Why Ocean DigiTech</span>
                            <h2 style="font-weight: 800; font-size: 2.3rem; color: #0b132b; line-height: 1.25; margin-bottom: 18px;">
                                Boutique Expertise,<br>
                                <span style="background: linear-gradient(135deg, #00d2ff 0%, #0066ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Global Results.</span>
                            </h2>
                            <p style="font-size: 15px; color: #475569; line-height: 1.7; margin-bottom: 24px;">
                                Ocean DigiTech blends creative strategy and technical mastery to deliver measurable business results. Our cross-functional teams collaborate, innovate, and empower your digital journey with speed and precision.
                            </p>

                            <!-- Interactive Pillar Cards -->
                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-light-bulb"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 15px;">Guided by Creativity. Propelled by Data.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 13px; line-height: 1.5;">Every product and campaign is backed by user analytics and rigorous conversion data.</p>
                                </div>
                            </div>

                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-bolt"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 15px;">Masters in Craft. Obsessed With Outcomes.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 13px; line-height: 1.5;">From pixel-perfect UI to scalable microservices, our engineering delivers high-ROI results.</p>
                                </div>
                            </div>

                            <div class="boutique-pillar-card">
                                <div class="boutique-pillar-icon">
                                    <span class="ti-medall"></span>
                                </div>
                                <div>
                                    <h6 class="mb-1" style="font-weight: 700; color: #0b132b; font-size: 15px;">Trusted by Fortune 500s & Bold Startups.</h6>
                                    <p class="mb-0 text-muted" style="font-size: 13px; line-height: 1.5;">Flexible engagement models built for ambitious brands wanting rapid digital transformation.</p>
                                </div>
                            </div>

                            <!-- Animated Stat Counters -->
                            <div class="row mt-4 pt-2">
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">45+</div>
                                        <div class="boutique-stat-label">Projects</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">250+</div>
                                        <div class="boutique-stat-label">Clients</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="boutique-stat-card">
                                        <div class="boutique-stat-number">07+</div>
                                        <div class="boutique-stat-label">Countries</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mt-4 pt-2">
                                <a href="contact-us.php" class="btn secondary-solid-btn mr-3" style="padding: 13px 28px; border-radius: 8px; font-weight: 600;">Start Your Project</a>
                                <a href="project.php" class="btn secondary-outline-btn" style="padding: 13px 28px; border-radius: 8px; font-weight: 600;">Explore Portfolio</a>
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
        <section class="services-section ptb-80 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <!--<strong class="color-secondary">Services Overview</strong>-->
                            <h2>What We Do</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable
                                ideas.
                                Dynamically
                                foster tactical solutions without enabled value.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-announcement icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">SEO Services</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-light-bulb icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">Custom Software Development</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-headphone-alt icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size: 1.1em;">Website Design & Development</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-bell icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">eCommerce Development & SEO</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-briefcase icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">Local SEO</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-vector icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">PPC & Online Advertising</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-vector icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">Technology Consulting</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-vector icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">Maintenance & Support</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <span class="ti-vector icon-lg color-secondary d-block mb-4"></span>
                            <h5 style="font-size:1.1em;">AI Consulting & Automation</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with
                                resource-leveling
                                partnerships.</p>
                            <a href="services-details.php" target="_blank" class="detail-link mt-4">Learn More <span
                                    class="ti-arrow-right"></span></a>
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

                <div class="growth-grid">
                    <!-- Card 1 -->
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

                    <!-- Card 2 -->
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

                    <!-- Card 3 -->
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

                    <!-- Card 4 -->
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

                    <!-- Card 5 -->
                    <div class="growth-card">
                        <div class="growth-card-icon">
                            <span class="fas fa-shopping-cart"></span>
                        </div>
                        <span class="growth-challenge-label">CHALLENGE: ECOMMERCE DROP-OFF</span>
                        <h3 class="growth-card-title">Cart Abandonment & Friction?</h3>
                        <p class="growth-card-desc">
                            Optimize storefront UX, checkout speed, and product discoverability to turn shoppers into repeat buyers.
                        </p>
                        <a href="ecommerce-web-development.php" class="growth-card-link">
                            Explore E-Commerce Growth <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>

                    <!-- Card 6 -->
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
                                <a href="project.php" class="portfolio-card-modern">
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
                                <a href="project.php" class="portfolio-card-modern">
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
                                <a href="project.php" class="portfolio-card-modern">
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
                            <a href="project.php" class="btn secondary-solid-btn px-4 py-3" style="border-radius: 8px; font-weight: 600; font-size: 15px;">
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
                                <div class="price text-center mb-0 monthly-price">$19<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">$69<span>.99</span></div>
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
                                <div class="price text-center mb-0 monthly-price">$49<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">$159<span>.99</span></div>
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
                                <div class="price text-center mb-0 monthly-price">$69<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">$259<span>.99</span></div>
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

        <!-- Client Testimonials Grid Section -->
        <style>
            .hp-testimonials {
                padding: 60px 0;
                background: #f8f9fa;
            }
            .hp-testimonials .hp-section-title {
                font-size: 42px;
                font-weight: 800;
                text-align: center;
                margin-bottom: 20px;
                color: #1a1a1a;
            }
            .hp-testimonials .hp-section-subtitle {
                text-align: center;
                font-size: 18px;
                color: #666;
                max-width: 700px;
                margin: 0 auto 50px;
                line-height: 1.6;
            }
            .hp-testimonials-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
                margin-top: 50px;
            }
            .hp-testimonial-card {
                background: white;
                padding: 35px;
                border-radius: 20px;
                box-shadow: 0 5px 30px rgba(0, 0, 0, 0.08);
                position: relative;
            }
            .hp-testimonial-card .hp-testimonial-text {
                font-size: 16px;
                line-height: 1.7;
                color: #333;
                margin-bottom: 25px;
                font-style: italic;
            }
            .hp-testimonial-card .hp-testimonial-author {
                font-weight: 700;
                color: #1a1a1a;
                margin-bottom: 5px;
            }
            .hp-testimonial-card .hp-testimonial-role {
                font-size: 14px;
                color: #666;
            }
            @media (max-width: 768px) {
                .hp-testimonials-grid {
                    grid-template-columns: 1fr;
                }
                .hp-testimonials .hp-section-title {
                    font-size: 28px;
                }
            }
        </style>
        <section class="hp-testimonials">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 text-center">
                        <span class="growth-challenge-label mb-2">TESTIMONIALS</span>
                        <h2 class="hp-section-title">Who Are Happy With Our Services</h2>
                        <p class="hp-section-subtitle">
                            See how we've helped companies across North America, Australia, and Asia achieve measurable digital growth.
                        </p>
                    </div>
                </div>

                <div class="hp-testimonials-grid">
                    <!-- Testimonial 1: EatClub -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">EatClub</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
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

                    <!-- Testimonial 2: Juniper -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">Juniper</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
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

                    <!-- Testimonial 3: Padra -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">Padra</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
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

                    <!-- Testimonial 4: Sightseeing Tours Australia -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">Sightseeing Tours Australia</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
                            </div>
                            <p class="hp-testimonial-text">
                                "Their audit gave us a clear roadmap to fix tracking issues and improve campaign performance. The insights were easy to execute and had a direct impact on bookings."
                            </p>
                        </div>
                        <div class="testimonial-author-row">
                            <img src="img/client-4.jpg" alt="Mark T." class="testimonial-author-avatar">
                            <div>
                                <div class="testimonial-author-name">Mark T.</div>
                                <div class="testimonial-author-role">Operations Manager, Tourism & Travel (Australia)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5: WEIR LLP LAW FIRM -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">WEIR LLP LAW FIRM</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
                            </div>
                            <p class="hp-testimonial-text">
                                "Ocean DigiTech helped us uncover technical and marketing gaps that were impacting lead quality. The audit was structured, insightful, and highly actionable."
                            </p>
                        </div>
                        <div class="testimonial-author-row">
                            <img src="img/client-5.jpg" alt="James W." class="testimonial-author-avatar">
                            <div>
                                <div class="testimonial-author-name">James W.</div>
                                <div class="testimonial-author-role">Managing Partner, Legal Services (USA)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 6: National Restoration -->
                    <div class="hp-testimonial-card-modern">
                        <div>
                            <div class="testimonial-company-header">
                                <span class="testimonial-company-name">National Restoration</span>
                                <span class="fas fa-quote-right color-primary" style="font-size: 20px; opacity: 0.4;"></span>
                            </div>
                            <p class="hp-testimonial-text">
                                "The audit revealed funnel and tracking issues affecting our paid campaigns. After applying the recommendations, lead quality and cost efficiency improved noticeably."
                            </p>
                        </div>
                        <div class="testimonial-author-row">
                            <img src="img/client-1.jpg" alt="Chris M." class="testimonial-author-avatar">
                            <div>
                                <div class="testimonial-author-name">Chris M.</div>
                                <div class="testimonial-author-role">Marketing Director, Home Services (USA)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Testimonials Grid Section End -->

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
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                                <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                    users. </p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
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
    <script src="js/scripts.js"></script>
</body>

</html>