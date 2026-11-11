<?php
// Route legacy template URLs to the current complete experience.
header('Location: services.php', true, 302);
exit;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Comprehensive digital transformation, custom software, and performance marketing services.">
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
    <title>Digital Growth Services - Ocean DigiTech</title>

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
</head>

<body>

    <?php include('header.php');?>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <?php $heroTitle = 'Digital expertise, built around you.'; $heroDescription = 'Discover how we combine strategy, design, and technology to support your business goals.'; $heroCategory = 'Service overview'; $heroImage = 'img/editorial/code.jpg'; $heroImageAlt = 'A software development screen'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--services details start-->
        <section class="service-details-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="service-details-wrap">
                            <img src="img/slider-img-2.jpg" alt="services" class="img-fluid rounded shadow-sm" />
                            <div class="services-detail-content mt-4">
                                <h4>Services Details</h4>
                                <p>Phosfluorescently disseminate magnetic e-business for user-centric "outside the box"
                                    thinking. Compellingly integrate client-based synergy after cutting-edge solutions.
                                    Objectively foster economically sound partnerships with timely meta-services.
                                    Globally
                                    develop market positioning methods of empowerment before ubiquitous niches.
                                    Energistically build extensive experiences after real-time channels.</p>

                                <p>Seamlessly coordinate high-quality functionalities and bricks-and-clicks methods of
                                    empowerment. Authoritatively cultivate adaptive bandwidth and collaborative
                                    intellectual
                                    capital. Uniquely build open-source experiences without market positioning customer
                                    service. Dramatically strategize resource sucking outsourcing through state of the
                                    art
                                    vortals. Quickly aggregate enterprise portals with cross-platform e-business.</p>

                                <p>Enthusiastically matrix future-proof internal or "organic" sources through covalent
                                    communities. Synergistically incubate reliable metrics whereas client-focused
                                    technologies. Completely embrace multifunctional scenarios without orthogonal
                                    benefits.
                                    Competently enhance equity invested data with performance based niches. Assertively
                                    aggregate professional catalysts for change without emerging metrics.</p>

                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="img-wrap">
                                            <img src="img/images.jpg" alt="services" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1 pb-3">Completely anembrace multifunctional scenarios without
                                                orthogonal benefits.
                                                Competently the enhance equity invested data with performance based
                                                niches:
                                            </li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Foreclosure</strong>
                                                consultant Human consulting
                                            </li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Corporate</strong>
                                                Immigration, Information
                                            </li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>SEO</strong>
                                                Optimization consultant</li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Rapidiously</strong>
                                                conceptualize communities</li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Consultant</strong>
                                                pharmacist Creative consultant
                                            </li>
                                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                                    ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Monotonectally</strong>
                                                B2B core competencies
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar-right pl-4">

                            <!--all services list-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>All Services</h5>
                                </div>
                                <?php include __DIR__.'/service-links.php'; ?>
                            </aside>

                            <!--need help-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>Need Help?</h5>
                                </div>
                                <p>We are available in 24/7 hours for dedicated support</p>
                                <ul class="primary-list mt-25">
                                    <li><svg class="od-icon mr-2 color-primary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#map-pin" width="100%" height="100%"></use></svg> 123 Yellow House, Mn
                                        9007
                                    </li>
                                    <li><svg class="od-icon mr-2 color-primary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#smartphone" width="100%" height="100%"></use></svg> (+123) 456-789-012</li>
                                    <li><svg class="od-icon mr-2 color-primary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#mail" width="100%" height="100%"></use></svg> youname@domail.com</li>
                                </ul>
                            </aside>

                            <!-- Subscribe widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h5>Newsletter</h5>
                                </div>
                                <p>Enter your email address below to subscribe to my newsletter</p>
                                <form action="#" method="post" class="d-none d-md-block d-lg-block">
                                    <input type="text" class="form-control input" id="email-footer" name="email"
                                        placeholder="info@yourdomain.com">
                                    <button type="submit"
                                        class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe
                                    </button>
                                </form>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services details end-->

<section class="od-faq-section service-faq-band" aria-label="Frequently asked questions"><div class="container service-faq-layout"><div class="od-faq-heading"><span class="premium-eyebrow">A little clarity</span><h2>Frequently asked questions</h2><p>Clear answers to help you plan your project with confidence.</p><a class="btn secondary-solid-btn service-faq-contact" href="contact-us.php#contact-form">Have another question?</a></div><div class="od-faq-list"><details class="od-faq-item" name="services-details-faq" open><summary><span class="od-faq-number">01</span><span class="od-faq-question"><span class="ti-receipt mr-3"></span> Which license do I
                                                need?</span><span class="od-faq-toggle" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span></summary><div class="od-faq-answer"><p>Uniquely leverage other's distinctive infomediaries rather than
                                                    leveraged supply chains. Continually seize distributed collaboration
                                                    and idea-sharing whereas user.</p></div></details>
<details class="od-faq-item" name="services-details-faq"><summary><span class="od-faq-number">02</span><span class="od-faq-question"><span class="ti-gallery mr-3"></span> How do I get access
                                                to a theme?</span><span class="od-faq-toggle" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span></summary><div class="od-faq-answer"><p>Rapidiously incentivize virtual e-commerce and exceptional e-tailers.
                                                    Progressively network focused catalysts for change without
                                                    orthogonal benefits. Dramatically empower.</p></div></details>
<details class="od-faq-item" name="services-details-faq"><summary><span class="od-faq-number">03</span><span class="od-faq-question"><span class="ti-wallet mr-3"></span> How do I see previous
                                                orders?</span><span class="od-faq-toggle" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14"/><path d="M12 5v14"/></svg></span></summary><div class="od-faq-answer"><p>Proactively monetize long-term high-impact innovation and scalable
                                                    relationships. Dynamically mesh principle-centered functionalities
                                                    before next-generation best practices. Distinctively empower.</p></div></details></div></div></section>


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
                            <a href="#" class="btn secondary-solid-btn">Become a Client</a>
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