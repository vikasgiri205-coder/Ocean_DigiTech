<?php $currentPage = 'team'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Meet the expert team of software engineers, digital strategists, and technology leaders behind Ocean Digitech.">
    <meta name="author" content="Ocean Digitech">

    <!-- OG Meta Tags -->
    <meta property="og:site_name" content="Ocean Digitech" />
    <meta property="og:title" content="Our Team | Ocean Digitech" />
    <meta property="og:description" content="Dedicated software engineers, digital strategists, and technology leaders committed to delivering digital transformation." />
    <meta property="og:type" content="website" />

    <!--title-->
    <title>Our Team | Ocean Digitech</title>

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
    <!--header section start-->
    <?php include('header.php');?>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <?php $heroTitle = 'Meet the people behind the ideas.'; $heroDescription = 'Designers, developers, and growth specialists working together to bring clarity, care, and momentum to your project.'; $heroCategory = 'Our team'; $heroImage = 'img/editorial/collaboration.jpg'; $heroImageAlt = 'A team collaborating in an office'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--team section start-->
        <section class="team-two-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <strong class="color-secondary">Dedicated Professionals</strong>
                            <h2 style="font-weight: 700;">Our Team Members</h2>
                            <span class="animate-border mr-auto ml-auto mb-4"></span>
                            <p class="lead">Our passionate team of software engineers, cloud architects, designers, and marketing experts bring innovation and technology excellence to every client project.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php include __DIR__ . '/leadership-card.php'; ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-1.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Enterprise Architecture Pod</h5>
                                <div class="team-card-role">Software Engineering</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Specializing in enterprise digital architecture and high-performance software engineering.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-2.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">UI/UX & Design Systems</h5>
                                <div class="team-card-role">Product Design</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Crafting intuitive user interfaces and modern visual design systems for digital platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-3.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Technology & Strategy</h5>
                                <div class="team-card-role">Executive Leadership</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Driving corporate strategy, international partnerships, and client growth initiatives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-4.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Full-Stack Development Pod</h5>
                                <div class="team-card-role">Web & API Engineering</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Expert in building scalable backend systems, APIs, and microservices architecture.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-5.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Cloud Infrastructure & DevOps</h5>
                                <div class="team-card-role">AWS, GCP & Kubernetes</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Architecting resilient AWS & GCP infrastructure and DevOps automation pipelines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-6.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Mobile Engineering Pod</h5>
                                <div class="team-card-role">iOS, Android & Flutter</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Delivering cross-platform Flutter and native iOS/Android mobile applications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-7.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Growth & Search Intelligence</h5>
                                <div class="team-card-role">SEO & Performance Marketing</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Optimizing SEO, conversion rates, and multi-channel performance marketing for clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="team-card-modern">
                            <div class="team-img-modern-wrap">
                                <img src="img/team-member-8.png" alt="Team Member" class="img-fluid">
                            </div>
                            <div class="team-card-body-modern">
                                <h5 class="team-card-name">Quality Assurance & Security</h5>
                                <div class="team-card-role">Automated Testing & SecOps</div>
                                <p class="text-muted" style="font-size: 13px; line-height: 1.5; margin-bottom: 0;">Ensuring bulletproof application security, performance benchmarks, and automated testing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team section end-->

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
                            <strong class="color-secondary">Quality Engineering</strong>
                            <h5 class="text-white">Client Satisfaction</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <div class="circle-box">
                            <div class="chart" data-percent="95"><span>95%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">On-Time Delivery</strong>
                            <h5 class="text-white">Milestone Completion</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                        <div class="circle-box">
                            <div class="chart" data-percent="90"><span>90%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Growth Impact</strong>
                            <h5 class="text-white">ROI Improvement</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="circle-box">
                            <div class="chart" data-percent="100"><span>100%</span></div>
                        </div>
                        <div class="progress-info text-center mt-3">
                            <strong class="color-secondary">Support Commitment</strong>
                            <h5 class="text-white">Post-Launch Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action progressbar end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form gray-light-bg rounded p-4 p-md-5">
                            <h4>Ready to work with our team?</h4>
                            <p class="text-muted mb-4">Send us a message and our technical leaders will get back to you within 24 hours.</p>
                            <form action="send_proposal.php" method="POST" id="teamContactForm" class="contact-us-form p-0">
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" name="name" placeholder="Your Full Name *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email Address *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group mb-0">
                                            <textarea name="message" id="team_message" class="form-control" rows="4" placeholder="How can our team help your business?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-2">
                                        <button type="submit" class="btn secondary-solid-btn w-100" style="padding: 14px;">
                                            Get in Touch with Our Team
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4 mt-md-0">
                        <div class="contact-us-content">
                            <h2>Partner with Ocean Digitech</h2>
                            <p class="lead">Accelerate your business with expert software engineering and digital transformation strategies.</p>

                            <a href="contact-us.php" class="btn outline-btn align-items-center mb-4">Contact Our Offices <svg class="od-icon pl-2" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a>

                            <hr class="my-4">

                            <h5>Global Operations & Offices</h5>
                            <p class="mb-2"><strong>India Headquarters:</strong> Noida, Uttar Pradesh, India</p>
                            <p class="mb-2"><strong>USA Contact:</strong> Delaware, USA</p>
                            <p class="mb-2"><strong>Direct Line:</strong> +44 7460 672819</p>
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