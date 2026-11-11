<?php
// Route legacy template URLs to the current complete experience.
header('Location: case-studies.php', true, 302);
exit;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="In-depth case study showcasing Ocean DigiTech's technical engineering, UX design, and scalable digital solutions.">
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
    <title>Case Study Details - Ocean DigiTech | Enterprise Growth Solutions</title>

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
        <?php $heroTitle = 'Behind the digital experience.'; $heroDescription = 'Explore the design approach, key considerations, and details behind a digital project.'; $heroCategory = 'Project details'; $heroImage = 'img/editorial/code.jpg'; $heroImageAlt = 'A development workspace'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--project details section start-->
        <section class="project-details-section ptb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-12 col-lg-8">
                        <div class="img-wrap mb-md-4 mb-lg-0">
                            <img src="img/hero-bg7.jpg" alt="project" class="img-fluid rounded shadow-sm" />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="project-details-sidebar">
                            <ul class="project-info-list">
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <svg class="od-icon icon-sm color-secondary d-block mr-3" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#user-round" width="100%" height="100%"></use></svg>
                                    <div class="d-block">
                                        <h5 class="mb-0">Company Name</h5>
                                        <p>ThemeTags Company Limited</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <svg class="od-icon icon-sm color-secondary d-block mr-3" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#clock-3" width="100%" height="100%"></use></svg>
                                    <div class="d-block">
                                        <h5 class="mb-0">Project Duration</h5>
                                        <p>20 March 2019 - 10 June 2019</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3 p-4 rounded">
                                    <svg class="od-icon icon-sm color-secondary d-block mr-3" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#link" width="100%" height="100%"></use></svg>
                                    <div class="d-block">
                                        <h5 class="mb-0">Project Address</h5>
                                        <a href="#">www.themetagscompany.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--project details row start-->
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="project-details-content">
                            <h5>Project Description</h5>
                            <p>Synergistically syndicate frictionless architectures via global e-services. Assertively
                                pontificate adaptive e-tailers rather than cross-unit results. Assertively engineer
                                top-line
                                portals through one-to-one growth strategies. Efficiently.</p>
                            <p>Proactively reinvent standards compliant applications before timely ROI. Uniquely
                                negotiate
                                installed base results rather than resource-leveling e-markets. Continually plagiarize
                                magnetic technologies vis-a-vis synergistic infomediaries. Globally communicate
                                progressive
                                users without resource maximizing growth strategies. Objectively evolve enterprise.</p>
                            <p>Collaboratively conceptualize flexible best practices via cooperative methodologies.
                                Assertively negotiate an expanded array of alignments with 24/365 "outside the box"
                                thinking. Assertively enable fully researched vortals rather than alternative niche
                                markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Foreclosure</strong>
                                    consultant Human resource consulting
                                </li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Corporate</strong>
                                    Immigration consultant, Information consulting
                                </li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>SEO</strong>
                                    Optimization Creative consultant</li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Rapidiously</strong>
                                    conceptualize strategic before communities</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project-details-feature">
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Consultant</strong>
                                    pharmacist Creative consultant
                                </li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Monotonectally</strong>
                                    customize B2B core competencies
                                </li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Immigration</strong>
                                    consultant, Information consulting</li>
                                <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                        ><use href="img/icons.svg?v=d285f5150a7c#circle-check" width="100%" height="100%"></use></svg><strong>Consultant</strong>
                                    pharmacist Creative consultant</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--project details row end-->
            </div>
        </section>
        <!--project details section end-->

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