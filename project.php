<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Explore Ocean DigiTech's proven portfolio of custom web applications, scalable eCommerce storefronts, and ROI-driven SEO campaigns.">
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
    <title>Our Portfolio - Ocean DigiTech Pvt. Ltd. | Global Web Development & Digital Marketing Agency</title>

    <!--favicon icon-->
    <link rel="icon" href="img/fevicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--Themify icon css-->
    <!--Fontawesome icon css-->
    <!--animated css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
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
    <link rel="stylesheet" href="css/portfolio-video.css?v=<?= filemtime(__DIR__ . '/css/portfolio-video.css') ?>">
    <script src="js/portfolio-video.js?v=<?= filemtime(__DIR__ . '/js/portfolio-video.js') ?>" defer></script>
</head>

<body>

    <?php include('header.php');?>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--compact modern portfolio banner start-->
        <?php $heroTitle = 'Digital experiences with purpose.'; $heroDescription = 'Watch our website walkthroughs and see digital experiences in action.'; $heroCategory = 'Our portfolio'; $heroImage = 'img/editorial/code.jpg'; $heroImageAlt = 'Software code on a development screen'; include __DIR__.'/inner-hero.php'; ?>
        <!--compact modern portfolio banner end-->

        <section class="showcase-section"><div class="container"><div class="showcase-heading"><small>Video portfolio</small><h2>Digital experiences, thoughtfully crafted.</h2><p>Explore our work through website walkthroughs and project videos.</p></div><div class="showcase-grid"><?php include __DIR__ . '/portfolio-video-cards.php'; ?></div></div></section>


        <!--call to action section start-->
        <section class="call-to-action-video">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="free-trial-image text-center">
                        <img src="img/cta-2-girl-img.jpg" alt="image" class="img-fluid">
                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                            class="popup-youtube video-play-icon white-bip shadow"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#play" width="100%" height="100%"></use></svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="free-trial-content text-white">
                        <h2 class="text-white">Best Consulting Every Business</h2>
                        <p>Interactively evisculate performance based ROI whereas premier mindshare. Dramatically matrix
                            real-time convergence rather than empowered manufactured products.</p>
                        <a href="contact-us.php" class="btn primary-solid-btn mt-3">Start Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->


        <!--pricing with switch section start-->
        
        <!--pricing with switch section end-->

        <!--testimonial section start (Identical to Home Page)-->
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
                                        </div>
                                        <p class="hp-testimonial-text">
                                            "Ocean DigiTech helped us improve visibility into campaign performance and user behavior. Their technical audit clarified where we were losing efficiency and helped us scale."
                                        </p>
                                    </div>
                                    <div class="testimonial-author-row">
                                        <img src="img/client-1.jpg" alt="Sarah M." class="testimonial-author-avatar">
                                        <div>
                                            <div class="testimonial-author-name">Sarah M.</div>
                                            <div class="testimonial-author-role">VP of Marketing (USA)</div>
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
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
                                            <span class="testimonial-stars"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#star" width="100%" height="100%"></use></svg></span>
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
        <!--testimonial section end-->

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