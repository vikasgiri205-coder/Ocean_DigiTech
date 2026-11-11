<?php $currentPage = 'contact'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Contact Ocean Digitech for web development, mobile apps, cloud services, and digital growth consulting.">
    <meta name="author" content="Ocean Digitech">

    <!-- OG Meta Tags -->
    <meta property="og:site_name" content="Ocean Digitech" />
    <meta property="og:title" content="Contact Us | Ocean Digitech" />
    <meta property="og:description" content="Get in touch with Ocean Digitech experts for project inquiries, technical consulting, and digital solutions." />
    <meta property="og:type" content="website" />

    <!--title-->
    <title>Contact Us | Ocean Digitech</title>

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


  <style>
        .contact-us-form {
        padding: 2rem;
        }
        
          
   @media (max-width: 768px) {
  .contact-us-form {
    padding: 5px !important;
  }
   }
    </style>


    <?php include("header.php") ;?>

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <?php $heroTitle = 'Let’s make your next idea happen.'; $heroDescription = 'Tell us what you have in mind. We’ll help you find a practical path from your first conversation to a considered digital solution.'; $heroCategory = 'Contact us'; $heroImage = 'img/editorial/collaboration.jpg'; $heroImageAlt = 'A team sharing ideas in a collaborative workspace'; $heroCta = 'Tell us about your project'; $heroCtaHref = '#contact-form'; include __DIR__.'/inner-hero.php'; ?>
        <!--header section end-->

        <!--contact us promo start-->
        <section class="contact-us-promo pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm h-100">
                            <div class="card-body py-4">
                                <div class="pb-2">
                                    <svg class="od-icon icon-sm color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#smartphone" width="100%" height="100%"></use></svg>
                                </div>
                                <div>
                                    <h5 class="mb-1" style="font-size: 1rem;">Call Us Directly</h5>
                                    <p class="text-muted mb-0" style="font-size: 14px;"><a href="tel:+447460672819">+44 7460 672819</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm h-100">
                            <div class="card-body py-4">
                                <div class="pb-2">
                                    <svg class="od-icon icon-sm color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#map-pin" width="100%" height="100%"></use></svg>
                                </div>
                                <div>
                                    <h5 class="mb-1" style="font-size: 1rem;">Our Headquarters</h5>
                                    <p class="text-muted mb-0" style="font-size: 14px;">Noida, India / Delaware, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card single-promo-card single-promo-hover text-center shadow-sm h-100">
                            <div class="card-body py-4">
                                <div class="pb-2">
                                    <svg class="od-icon icon-sm color-secondary" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false"  ><use href="img/icons.svg?v=d285f5150a7c#mail" width="100%" height="100%"></use></svg>
                                </div>
                                <div>
                                    <h5 class="mb-1" style="font-size: 1rem;">Mail Us</h5>
                                    <p class="text-muted mb-0" style="font-size: 14px;"><a href="mailto:oceandigitech205@gmail.com">oceandigitech205@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </section>
        <!--contact us promo end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-100">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around" style="margin-top: 5%;">
                    <div class="col-md-6">
                        <div id="contact-form" class="contact-us-form gray-light-bg rounded">
                            
                            
                            <div class="proposal-form-container" style="max-width: 860px; margin: 0 auto; padding: 28px 20px; background:#fff; border-radius:8px;">
                                      <h2 style="text-align:center; color:#e80566; font-family:Arial, sans-serif; font-size:32px; margin:0 0 18px;">Experience Real Results</h2>
                                    
                                      <form id="proposalForm" data-async-form="contact" class="proposal-form" method="post" action="send_proposal.php" autocomplete="on" style="width:100%;">
                                        <div class="form-row contact-field-pair" style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:14px;">
                                          <label class="form-field" for="contact-name"><span>Name *</span><input type="text" name="name" id="contact-name" autocomplete="name" placeholder="Name *" required class="input-field" style="width:100%; padding:14px 12px; border:1px solid #e2e2e2; border-radius:6px; font-size:14px;"></label>
                                          <label class="form-field" for="contact-phone"><span>Phone *</span><input type="tel" name="phone" id="contact-phone" autocomplete="tel" placeholder="Phone *" required class="input-field" style="width:100%; padding:14px 12px; border:1px solid #e2e2e2; border-radius:6px; font-size:14px;"></label>
                                        </div>
                                    
                                        <div class="form-row contact-field-pair" style="display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:14px;">
                                          <label class="form-field" for="contact-email"><span>Email *</span><input type="email" name="email" id="contact-email" autocomplete="email" placeholder="Email *" required class="input-field" style="width:100%; padding:14px 12px; border:1px solid #e2e2e2; border-radius:6px; font-size:14px;"></label>
                                          <label class="form-field" for="contact-website"><span>Website</span><input type="url" name="website" id="contact-website" autocomplete="url" placeholder="Website" class="input-field" style="width:100%; padding:14px 12px; border:1px solid #e2e2e2; border-radius:6px; font-size:14px;"></label>
                                        </div>
                                    
                                        <div class="form-row" style="margin-bottom:14px;">
                                          <label class="form-field" for="contact-company"><span>Company name</span><input type="text" name="company" id="contact-company" autocomplete="organization" placeholder="Company name" class="input-field" style="width:100%; padding:14px 12px; border:1px solid #e2e2e2; border-radius:6px; font-size:14px;"></label>
                                        </div>
                                    
                                        <div class="section-title" style="font-weight:600; margin:18px 0 8px; color:#333;"><span id="services-label">What are you looking for? *</span></div>
                                            <div class="checkbox-grid" role="group" aria-labelledby="services-label" style="display:grid; grid-template-columns:1fr 1fr; gap:12px 20px; margin-bottom:14px;">
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Web App Development" style="margin-right:8px;">
                                                Web App Development
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Website Development" style="margin-right:8px;">
                                                Website Development
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Mobile App Development" style="margin-right:8px;">
                                                Mobile App Development
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Cloud-based Services" style="margin-right:8px;">
                                                Cloud-based Services
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="SEO Services" style="margin-right:8px;">
                                                SEO Services
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Startup Consulting" style="margin-right:8px;">
                                                Startup Consulting
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Paid Advertising" style="margin-right:8px;">
                                                Paid Advertising
                                              </label>
                                              <label style="font-family:Arial, sans-serif; font-size:14px;">
                                                <input type="checkbox" name="services[]" value="Other Services" style="margin-right:8px;">
                                                Other Services
                                              </label>
                                            </div>         
                                        <div class="form-row" style="margin-bottom:14px;">
                                          <label class="form-field" for="contact-message"><span>Message</span><textarea name="message" id="contact-message" placeholder="Message" rows="5" style="width:100%; padding:14px; border:1px solid #e2e2e2; border-radius:6px; resize:vertical; font-family:Arial, sans-serif;"></textarea></label>
                                        </div>
                                        <div class="form-row captcha-row" style="display:flex; align-items:center; gap:12px; margin:6px 0 18px;">
                                          <label style="display:flex; align-items:center; gap:8px; font-family:Arial, sans-serif;">
                                            <input type="checkbox" name="not_robot" value="1" required> I confirm these details are correct.
                                          </label>
                                          
                                        </div>
                                    
                                        <div class="form-row" style="margin-top:6px;">
                                          <button type="submit" class="submit-btn" style="width:100%; background:#e80566; color:#fff; border:0; padding:14px 16px; border-radius:8px; font-size:16px; font-weight:600; cursor:pointer;">
                                            Send me a Proposal
                                          </button>
                                        </div>
<p class="form-feedback" role="status" aria-live="polite" tabindex="-1"></p>
                                      </form>
                                    </div>
                               
                               </div>
                            </div>
                      <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2 style="font-size: 2em;">Let’s build something that works for you.</h2>
                            <p >Partner With the Digital Experts Who Deliver Leave your details and let’s advance your business. Here’s how working with OceanDigiTech sets the stage for real, measurable results. </p>
                             <h5>Our Headquarters</h5>
                             <p >Our team takes the time to learn about your business, market, and unique challenges. We review your competitors, analyze your digital presence, and listen to what you really want to achieve - so we can create a custom plan that fits your growth vision. </p>
                             <h5>Strategic Planning Built for ROI </h5>
                             <p>Every client receives a strategic, data-backed growth proposal. We outline clear deliverables, timelines, and pricing so you always know what comes next. Expect honest recommendations and innovative solutions designed for your continued digital success.</p>
                            <h5>Seamless Onboarding & Project Kickoff</h5>
                            <p>Once you’re ready to begin, we work closely with you from day one - ensuring smooth communication, proactive support, and milestones you can track. With OceanDigiTech, every project starts strong and gets results that matter for your business.</p>
                            <hr class="my-5">
                        </div>
                    </div>
                </div>
            </div>
      </section>
        <!--contact us section end-->

        <!--google map block start-->
        <div class="google-map">
           <iframe title="Map of the office area in Chester, New Jersey" src="https://maps.google.com/maps?q=530%20Main%20St%20Chester%20NJ%2007930&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--google map block end-->


    </div>
    <!--body content wrap end-->

    <?php include("footer.php") ;?>
    
    
    
    <!-- Include this script below your form or in a global script tag -->


    
    

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