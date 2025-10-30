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
        <section class="ptb-70 gradient-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="hero-slider-content text-white pt-5">
                            <strong style="color:#e80566;">Digital, Done Right!</strong>
                            <h1 class="text-white" style="font-size: 28px;     margin-top: 8px;">Custom Software Development & Digital Marketing for Startups to Enterprises</h1>
                            <p class="lead" style="font-size: 1rem;">Partner with Ocean DigiTech to accelerate growth, define your brand, and turn ideas into high-impact digital experiences.</p>
                            <p class="lead" style="font-size: 1rem;">We craft custom software, web and app development, and results-driven marketing campaigns for startups, SMEs, and enterprises—all built for resilience, scalability, and creativity in the digital age. </p>

                            <div class="action-btns mt-4">
                                 <!-- Baseline: sirf ek line ka form (Business Name + Button) -->
                                  <div class="quick-proposal" aria-label="Proposal quick form">
                                    <input type="text" id="businessName" placeholder="Enter Your email" required />
                                    <button type="button" onclick="sendProposal()">Send me a Proposal</button>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="image-wrap pt-5">
                            <img src="img/t1-hero-img.svg" class="img-fluid custom-width" alt="hero" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->
        
        
          <!--promo section start-->
        <!--<section class="promo-section ptb-100">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
                    
                    
                
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--promo section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <!--<strong class="color-secondary">Our Services</strong>-->
                            <h2>Quick Stats & Trust Signals</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">| 40+ Clients Served | 98% Client Retention Rate | 100+ Projects Completed | 3+ Industry Awards | 4.9/5 Review Average |</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-3 col-lg-3 text-center">
                        <img src="img/cluch.jpg" alt="Clutch Badge" style="display:inline-block; width:120px; height:auto;">
                    </div>

                    <div class="col-md-3 col-lg-3 text-center">
                        <img src="img/tech-behemoths.png" alt="Tech Behemoths Badge" style="display:inline-block; width:120px; height:auto;">
                    </div>

                    <div class="col-md-3 col-lg-3 text-center">
                        <img src="img/top-developers.png" alt="Top Developers Badge" style="display:inline-block; width:120px; height:auto;">
                    </div>

                </div>
                </div>
           <!--<div class="logos-row" style="display:flex; align-items:center; justify-content:space-between; gap:20px; flex-wrap:wrap;">-->
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section class="about-us-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="about-us-img">
                            <img src="img/about-us-img.svg" alt="about us" class="img-fluid about-single-img">
                            <img src="img/about-us-img-bg.svg" alt="about bg" class="about-us-bg">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="about-us-content-wrap">
                            <!--<strong class="color-secondary">"Why Ocean DigiTech?" Agency Introduction</strong>-->
                            <h3>Boutique Expertise, Global Results</h3>
                            <span class="animate-border mb-4"></span>
                            <p>Ocean DigiTech blends creative strategy and technical mastery to deliver measurable business results. Our cross-functional teams don’t just deliver digital—we collaborate, innovate, and empower your journey. With offices spanning two continents, our experts help clients launch, grow, and evolve, no matter their starting point.</p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Guided by Creativity.</strong> 
                                    Propelled by Data.
                                </li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Masters in Craft.</strong> 
                                   Obsessed With Outcomes.
                                </li>
                                <li class="py-1"><span
                                        class="ti-control-forward mr-2 color-secondary"></span><strong>Trusted by Fortune 500s</strong> 
                                   & Bold Startups Alike.
                                </li>
                            </ul>
                            <div class="row mt-4">
                                <div class="col-4">
                                    <div class="counter-single">
                                        <h2 class="mb-0 color-secondary">45</h2>
                                        <strong>Total Project</strong>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="counter-single">
                                        <h2 class="mb-0 color-secondary">250</h2>
                                        <strong>Total Customer</strong>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="counter-single">
                                        <h2 class="mb-0 color-secondary">07</h2>
                                        <strong>Countries</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>
                                <a href="#" class="btn secondary-outline-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->


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

        <!--why choose us section start-->
        <section class="why-choose-us ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-5">
                        <div class="why-choose-us-wrap">
                            <!--<strong class="color-secondary">Why Choose Us</strong>-->
                            <h3>Solving Your Digital Growth Bottlenecks</h3>
                            <span class="animate-border mb-4"></span>
                            <p>Identify visitor pains and offer solutions:</p>

                            <div class="skill-content-wrap">
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>Outdated systems holding you back? See Software Modernization. <a href="#" class="detail-link">Learn More<span class="ti-arrow-right"></span></a>
                                        <!--<span class="float-right"><span class="progress-number">80</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:80%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>Losing leads on Google? Power up with SEO & local optimization. <a href="#" class="detail-link">Learn More <span class="ti-arrow-right"></span></a> 
                                        <!--<span class="float-right"><span class="progress-number">85</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:85%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>Manual work draining your team? Automate with tailored workflows. <a href="#" class="detail-link">Learn More <span class="ti-arrow-right"></span></a>
                                        <!--<span class="float-right"><span class="progress-number">85</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:85%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>Ads not performing? Launch targeted campaigns. <a href="#" class="detail-link">Learn More <span class="ti-arrow-right"></span></a>
                                        <!--<span class="float-right"><span class="progress-number">80</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:80%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>Cloud migration headaches? Transition with ease. <a href="#" class="detail-link">Learn More <span class="ti-arrow-right"></span></a>
                                        <!--<span class="float-right"><span class="progress-number">80</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:80%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                                <div class="progress-item" style="margin-bottom: 20px; margin-top: 20px;">
                                    <div class="progress-title">
                                        <p>New venture or product idea? Startup and tech consulting solutions. <a href="#" class="detail-link">Learn More <span class="ti-arrow-right"></span></a>
                                        <!--<span class="float-right"><span class="progress-number">80</span>%</span>-->
                                        </p>
                                    </div>
                                    <!--<div class="progress">-->
                                    <!--    <span style="width:80%;"><span class="progress-line"></span></span>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="image-wrap">
                            <img src="img/why-choose-us.png" alt="why choose us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--why choose us section end-->

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

        <!--our work or portfolio section start-->
        <section class="our-portfolio-section pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <!--<strong class="color-secondary">Previous Project</strong>-->
                            <h2>Our Case Studies</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process
                                improvements.
                                Intrinsicly
                                develop end-to-end customer service without extensive data.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center pb-2">
                            <button type="button" class="filter-btn" data-mixitup-control data-filter="all">Digital
                                Marketing
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control
                                data-filter=".branding">Marketing
                                Strategy
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control
                                data-filter=".animation">Content
                                Marketing
                            </button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">SEO
                                Services
                            </button>
                        </div>
                        <div class="portfolio-container" id="MixItUp">
                            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/3.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Creative Design</h5>
                                            <p>Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/2.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                            <p>Web, Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mix portfolio-item animation" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/4.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                            <p>Flyer Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/1.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                            <p>Web, Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/5.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Wall Painting Design</h5>
                                            <p>Painting Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mix portfolio-item branding " data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="project-details.php" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/6.jpg" alt="portfolio" />
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                            <p>Corporate Design</p>
                                        </div>
                                    </a>
                                    <div class="text-center p-4">
                                        <h5 class="mb-1">Market Research Analysis</h5>
                                        <span>Sales, SEO, Marketing</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="gap"></div>
                            <div class="gap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our work or portfolio section end-->

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

        <!--blog section start-->
        <section class="our-blog-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">New and Blog</strong>
                            <h2>Our Latest News</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">
                                Enthusiastically drive revolutionary opportunities before emerging leadership.
                                Distinctively
                                transform tactical methods of empowerment via resource.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <div class="blog-img position-relative">
                                <img src="img/blog/1.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <div class="blog-img position-relative">
                                <img src="img/blog/2.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                            Comments
                                        </li>
                                        <li class="list-inline-item"><i
                                                class="fas fa-share-alt mr-2"></i><span>10</span>
                                            Share
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                                <p class="card-text">Synergistically engage effective ROI after customer directed
                                    partnerships.</p>
                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <div class="blog-img position-relative">
                                <img src="img/blog/3.jpg" class="card-img-top" alt="blog">
                                <div class="meta-date">
                                    <strong>24</strong>
                                    <small>Apr</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="post-meta mb-2">
                                    <ul class="list-inline meta-list">
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

        <!--client section start-->
        <div class="client-section ptb-100" style="background: url('img/client-bg.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="client-heading-wrap">
                            <h3>Who are Happy With Services and Work</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="client-para">
                            <p>Seamlessly administrate synergistic growth strategies and collaborative markets. Globally
                                empower inexpensive infomediaries after sustainable mindshare. Phosfluorescently brand
                                professional collaboration and idea-sharing without principle-centered interfaces. </p>
                        </div>
                    </div>
                </div>
                <!--clients logo start-->
                <div class="row align-items-center justify-content-center mb-4">
                    <div class="col-md-10 col-lg-9">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
                            <div class="item single-client">
                                <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </div>
        <!--client section end-->


        <!--team two section start-->
        <section class="team-two-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Our Team</strong>
                            <h2>Awesome Team Members</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                                Enthusiastically
                                disseminate user-centric outsourcing.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="img/team-member-1.png" alt="team image" width="120"
                                    class="img-fluid m-auto pt-4">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Richard Ford</h5>
                                    <span>Instructor of Mathematics</span>
                                    <p class="teacher-quote pt-3">Dramatically leverage existing fully researched
                                        platforms. </p>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Dramatically leverage existing fully researched platforms
                                        vis-a-vis viral." </p><a href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Richard Ford</h5>
                                    </a>
                                    <span class="teacher-field text-white">Instructor of Mathematics</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="img/team-member-2.png" alt="team image" width="120"
                                    class="img-fluid m-auto pt-4">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Kely Roy</h5>
                                    <span>Lead Designer</span>
                                    <p class="teacher-quote pt-3">Compellingly strategize covalent e-services rather
                                        than </p>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line
                                        relationships." </p><a href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Kely Roy</h5>
                                    </a><span class="teacher-field text-white">Lead Designer</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="img/team-member-3.png" alt="team image" width="120"
                                    class="img-fluid m-auto pt-4">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Gerald Nichols</h5>
                                    <span>Managing Director</span>
                                    <p class="teacher-quote pt-3">Credibly extend high-payoff web-readiness via
                                        top-line.</p>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                        prospective partnerships." </p><a href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Gerald Nichols</h5>
                                    </a>
                                    <span class="teacher-field text-white">Managing Director</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="staff-member my-md-3 my-lg-3 my-sm-0">
                            <div class="card text-center">
                                <img src="img/team-member-4.png" alt="team image" width="120"
                                    class="img-fluid m-auto pt-4">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Gerald Nichols</h5>
                                    <span>Managing Director</span>
                                    <p class="teacher-quote pt-3">Professionally engage clicks-and-mortar customer</p>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas
                                        prospective partnerships." </p><a href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Gerald Nichols</h5>
                                    </a>
                                    <span class="teacher-field text-white">Managing Director</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team two section end-->

        <!--call to action section start-->
        <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3 class="mb-1">Consulting Agency for Your Business</h3>
                            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="#" class="btn secondary-solid-btn">Contact With Us</a>
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