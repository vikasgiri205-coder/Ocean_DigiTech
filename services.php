<?php $currentPage = 'services'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Explore Ocean Digitech's enterprise digital services: Web Application Development, Mobile Apps, Cloud Services, SEO, and Performance Marketing.">
    <meta name="author" content="Ocean Digitech">

    <!-- OG Meta Tags -->
    <meta property="og:site_name" content="Ocean Digitech" />
    <meta property="og:title" content="Our Services | Ocean Digitech" />
    <meta property="og:description" content="Custom software engineering, cloud architecture, web app development, and digital transformation services." />
    <meta property="og:type" content="website" />

    <!--title-->
    <title>Our Services | Ocean Digitech</title>

    <!--favicon icon-->
    <link rel="icon" href="img/fevicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <!--Fontawesome icon css-->
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo file_exists('css/style.css') ? filemtime('css/style.css') : '2.2'; ?>">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css?v=<?php echo file_exists('css/responsive.css') ? filemtime('css/responsive.css') : '2.2'; ?>">

    <link rel="stylesheet" href="css/theme.css?v=<?php echo filemtime(__DIR__ . '/css/theme.css'); ?>">
    <link rel="stylesheet" href="css/premium.css?v=<?= substr(hash_file('sha256', __DIR__ . '/css/premium.css'), 0, 12) ?>">
    <script src="js/animations.js?v=<?= substr(hash_file('sha256', __DIR__ . '/js/animations.js'), 0, 12) ?>" defer></script>
</head>

<body>

<?php include('header.php');?>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <?php $heroTitle = 'The right expertise. All in one place.'; $heroDescription = 'From thoughtful websites and custom software to search and paid media, find the support your next stage needs.'; $heroCategory = 'Our services'; $heroImage = 'img/editorial/code.jpg'; $heroImageAlt = 'Code being developed for a digital product'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="promo-single-wrap p-5 text-center custom-shadow rounded white-bg">
                            <div class="promo-icon mb-4">
                                <svg class="od-icon color-primary icon-lg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#monitor" width="100%" height="100%"></use></svg>
                                <span class="number-bg">01</span>
                            </div>
                            <div class="promo-info">
                                <strong class="color-secondary">Engineering</strong>
                                <h4>Web App Development</h4>
                                <p>Custom SaaS platforms, enterprise web applications, and modern frontend/backend solutions tailored to your business operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="promo-single-wrap p-5 text-center custom-shadow rounded white-bg">
                            <div class="promo-icon mb-4">
                                <svg class="od-icon color-primary icon-lg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#smartphone" width="100%" height="100%"></use></svg>
                                <span class="number-bg">02</span>
                            </div>
                            <div class="promo-info">
                                <strong class="color-secondary">Mobile Tech</strong>
                                <h4>Mobile App Development</h4>
                                <p>Native iOS, Android, and cross-platform Flutter mobile applications engineered for exceptional user engagement and speed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="promo-single-wrap p-5 text-center custom-shadow rounded white-bg">
                            <div class="promo-icon mb-4">
                                <svg class="od-icon color-primary icon-lg" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#cloud" width="100%" height="100%"></use></svg>
                                <span class="number-bg">03</span>
                            </div>
                            <div class="promo-info">
                                <strong class="color-secondary">Infrastructure</strong>
                                <h4>Cloud & DevOps Services</h4>
                                <p>Scalable cloud infrastructure on AWS and GCP with automated CI/CD deployment pipelines, monitoring, and high availability.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--services section start-->
        <section class="services-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">End-to-End Solutions</strong>
                            <h2>Digital Transformation Services</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">We provide technical innovation and data-backed digital services designed to scale high-growth companies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#megaphone" width="100%" height="100%"></use></svg>
                            <h5>Web App Development</h5>
                            <p class="mb-3">Modern single-page applications, cloud backends, microservices, and custom web portals built for security and performance.</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#smartphone" width="100%" height="100%"></use></svg>
                            <h5>Mobile Application Development</h5>
                            <p class="mb-3">High-performance native and cross-platform apps with smooth UI/UX and seamless offline data synchronization.</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#cloud" width="100%" height="100%"></use></svg>
                            <h5>Cloud-Based Services & DevOps</h5>
                            <p class="mb-3">AWS and GCP cloud architecture, infrastructure as code, serverless computing, and database optimization.</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#chart-no-axes-combined" width="100%" height="100%"></use></svg>
                            <h5>SEO & Organic Traffic Growth</h5>
                            <p class="mb-3">Technical SEO audits, keyword strategy, schema architecture, and content optimization to drive targeted search revenue.</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#lightbulb" width="100%" height="100%"></use></svg>
                            <h5>Startup Tech Consulting</h5>
                            <p class="mb-3">MVP development strategies, technology stack selection, system architecture reviews, and scalable product roadmaps.</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="services-single p-5 shadow-sm rounded white-bg h-100">
                            <svg class="od-icon icon-lg color-primary d-block mb-4" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#target" width="100%" height="100%"></use></svg>
                            <h5>Paid Search & Performance PPC</h5>
                            <p class="mb-3">Data-driven Google Ads, LinkedIn Ads, and remarketing campaigns structured for maximum return on ad spend (ROAS).</p>
                            <a href="contact-us.php" class="detail-link mt-auto">Discuss Project <svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end-->

        <!--call to action progressbar start-->
        <section class="call-to-action ptb-100"
            style="background: url('img/ctg-bg-2.jpg') no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <div class="circle-box">
                            <div class="chart" data-percent="98"><span>98%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Engineering</strong>
                            <h5 class="text-white">Client Satisfaction</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <div class="circle-box">
                            <div class="chart" data-percent="95"><span>95%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Operations</strong>
                            <h5 class="text-white">On-Time Delivery</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <div class="circle-box">
                            <div class="chart" data-percent="90"><span>90%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Growth</strong>
                            <h5 class="text-white">Traffic & Revenue ROI</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-box">
                            <div class="chart" data-percent="100"><span>100%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Support</strong>
                            <h5 class="text-white">SLA Uptime Commitment</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action progressbar end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-4 p-md-5">
                            <h4>Ready to start your digital growth?</h4>
                            <form action="send_proposal.php" method="POST" id="servicesContactForm" class="contact-us-form p-0">
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="name" placeholder="Enter name *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" name="email" placeholder="Enter email *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="tel" class="form-control" name="phone" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <textarea name="message" id="service_message" class="form-control" rows="4" placeholder="Tell us about your project requirements..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <button type="submit" class="btn secondary-solid-btn w-100" style="padding: 14px;">
                                            Request Project Consultation
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4 mt-md-0">
                        <div class="contact-us-content">
                            <h2>Looking for custom technology solutions?</h2>
                            <p class="lead">Partner with Ocean Digitech for scalable software, web apps, and digital growth strategies tailored to your enterprise.</p>

                            <a href="contact-us.php" class="btn outline-btn align-items-center mb-4">Contact Our Team <svg class="od-icon pl-2" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>

                            <hr class="my-4">

                            <h5>Ocean Digitech Offices</h5>
                            <p class="mb-2"><strong>India Headquarters:</strong> Noida, Uttar Pradesh, India</p>
                            <p class="mb-2"><strong>USA Contact:</strong> Delaware, USA</p>
                            <p class="mb-2"><strong>Phone:</strong> +44 7460 672819</p>
                            <p class="mb-0"><strong>Email:</strong> <a href="mailto:oceandigitech205@gmail.com" class="link-color">oceandigitech205@gmail.com</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->

    </div>
    <!--body content wrap end-->

    <!--footer section start-->
    <?php include('footer.php');?>
    <!--footer section end-->

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
    <!--wow js-->
    <script src="js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>
    <!--jquery easypiechart-->
    <script src="js/jquery.easy-pie-chart.js"></script>
    <!--custom js-->
    <script src="js/scripts.js?v=<?php echo file_exists('js/scripts.js') ? filemtime('js/scripts.js') : '2.2'; ?>"></script>
</body>

</html>