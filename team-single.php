<?php
http_response_code(404);
include('404.php');
exit();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Meet the senior software engineers, system architects, and marketing directors at Ocean DigiTech.">
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
    <title>Leadership & Experts - Ocean DigiTech</title>

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
        <?php $heroTitle = 'Meet our team.'; $heroDescription = 'Get to know the people, skills, and perspectives behind our work.'; $heroCategory = 'Team profile'; $heroImage = 'img/editorial/collaboration.jpg'; $heroImageAlt = 'A collaborative team discussion'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--team single section start-->
        <section class="team-single-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-sm-12 col-lg-5">
                        <div class="team-single-img">
                            <img src="img/team-2.jpg" alt="member" class="img-fluid rounded shadow-sm" />
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="team-single-text">
                            <div class="team-name mb-4">
                                <h4 class="mb-1">Lily Henry</h4>
                                <span>Managing Director</span>
                            </div>
                            <ul class="team-single-info">
                                <li><strong>Phone:</strong><span> (+123) 123-456-789</span></li>
                                <li><strong>Email:</strong><span> yourname@domain.com</span></li>
                            </ul>
                            <div class="text-content mt-20">
                                <p>Authoritatively deploy fully researched leadership skills whereas one-to-one best
                                    practices. Monotonectally aggregate virtual imperatives and accurate technology.
                                    Dynamically streamline progressive sources before user friendly.</p>
                                <p>Enthusiastically synthesize cross-unit technology for sticky results.
                                </p>
                                <p>Progressively productize vertical alignments after sticky process improvements.
                                    Competently scale transparent methods of empowerment and visionary products.</p>
                            </div>
                            <ul class="team-social-list list-inline mt-4">
                                <li class="list-inline-item"><a href="#" class="color-primary"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                            ><use href="img/icons.svg?v=d285f5150a7c#brand-faFacebookF" width="100%" height="100%"></use></svg></a></li>
                                <li class="list-inline-item"><a href="#" class="color-primary"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                            ><use href="img/icons.svg?v=d285f5150a7c#brand-faInstagram" width="100%" height="100%"></use></svg></a></li>
                                <li class="list-inline-item"><a href="#" class="color-primary"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                            ><use href="img/icons.svg?v=d285f5150a7c#brand-faDribbble" width="100%" height="100%"></use></svg></a></li>
                                <li class="list-inline-item"><a href="#" class="color-primary"><svg class="od-icon " viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                            ><use href="img/icons.svg?v=d285f5150a7c#brand-faLinkedinIn" width="100%" height="100%"></use></svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="section-heading">
                            <h5>Activities And Skills</h5>
                            <div class="section-heading-line-left"></div>
                        </div>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Cost</strong>
                                Good Business Consultants are Excellent Communicators
                            </li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Corporate</strong>
                                At the End of a Project, Good Business Consultants
                            </li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>SEO</strong> Good
                                Business Consultants are Willing to Travel Where the Work
                                Is</li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Company</strong>
                                Write a Business Plan that Clearly Articulates the Following</li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Business</strong>
                                Assertively embrace technically sound action
                            </li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" 
                                    ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Quickly</strong>
                                architect customer directed portals with
                                Is</li>
                            <li class="py-1"><svg class="od-icon mr-2 color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#chevrons-right" width="100%" height="100%"></use></svg><strong>Web
                                    Agency</strong> Synergistically plagiarize robust methodologies</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="section-heading mt-40">
                            <h5>Professional Skills</h5>
                            <div class="section-heading-line-left"></div>
                        </div>
                        <div class="skill-content-wrap">
                            <p>Holisticly whiteboard low-risk high-yield e-services vis-a-vis user-centric data.
                                Competently benchmark communities whereas interactive.</p>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Technical skills<span class="float-right"><span
                                                class="progress-number">80</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:80%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Marketing<span class="float-right"><span
                                                class="progress-number">70</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:70%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                            <div class="progress-item">
                                <div class="progress-title">
                                    <h6>Web Consulting<span class="float-right"><span
                                                class="progress-number">85</span>%</span>
                                    </h6>
                                </div>
                                <div class="progress">
                                    <span style="width:85%;"><span class="progress-line"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team single section end-->

        <!--customer section start-->
        <div class="customer-section ptb-100 d-none d-md-block d-sm-none d-lg-block gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="client-section-wrap d-flex flex-row align-items-center">
                            <p class="lead mr-5 mb-0">Trusted by companies like:</p>
                            <ul class="list-inline justify-content-between">
                                <li class="list-inline-item"><img src="img/clients-logo-01.png" width="85" alt="client"
                                        class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/clients-logo-02.png" width="85" alt="client"
                                        class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/clients-logo-03.png" width="85" alt="client"
                                        class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/clients-logo-04.png" width="85" alt="client"
                                        class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/clients-logo-05.png" width="85" alt="client"
                                        class="img-fluid"></li>
                                <li class="list-inline-item"><img src="img/clients-logo-06.png" width="85" alt="client"
                                        class="img-fluid"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--customer section end-->


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