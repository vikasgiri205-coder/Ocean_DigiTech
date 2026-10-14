

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$isHome = ($currentPage === 'index.php' || empty($currentPage) || $currentPage === 'Ocean_Digitech' || rtrim($reqPath, '/') === '/Ocean_Digitech' || $reqPath === '/');
?>
<style>
  .mega-menu .subtext {
    display: block;
    font-size: 12px;
    color: #808080;
    margin-top: 5px;
    font-weight: 400;
  }
  .brand-logo {
    height: 55px !important;
    width: auto !important;
    max-height: 55px !important;
    object-fit: contain !important;
    transition: all 0.3s ease;
  }
  @media (max-width: 768px) {
    .brand-logo {
      height: 42px !important;
      max-height: 42px !important;
    }
  }

  /* Active & Highlighted Navigation Link */
  .menu li.active > a,
  .navbar-nav li.active > a,
  .navbar-nav.menu li.active > a {
    color: #e80566 !important;
    opacity: 1 !important;
    font-weight: 700 !important;
    position: relative;
  }
  .menu li.active > a::after,
  .navbar-nav li.active > a::after,
  .navbar-nav.menu li.active > a::after {
    content: '';
    position: absolute;
    bottom: 8px;
    left: 12px;
    right: 12px;
    height: 3px;
    background: #e80566;
    border-radius: 4px;
  }
  .menu li > a:hover,
  .navbar-nav li > a:hover {
    color: #e80566 !important;
    opacity: 1 !important;
  }
</style>

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg mega-menu">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center my-1" href="index.php">
                <img src="img/logo-main.png" alt="Ocean Digitech Logo" class="brand-logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" style="font-size: 1.6rem;">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li class="<?php echo $isHome ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
                    <li class="<?php echo ($currentPage == 'about-us.php') ? 'active' : ''; ?>"><a href="about-us.php">About</a></li>
                    <li class="dropdown-nav <?php echo (in_array($currentPage, ['custom-website-design.php','custom-website-development.php','ecommerce-web-development.php','mobile-app-development.php','social-media-management.php','social-media-advertising.php','google-ads-management.php','paid-social-advertising.php','amazon-ppc-management.php','amazon-dsp-advertising.php','seo-services.php','local-seo-services.php','ecommerce-seo-services.php','services.php'])) ? 'active' : ''; ?>">
                        <a href="services.php" class="dropdown-toggle">Services</a>
                        <ul class="sub-menu">
                            <li><a href="#" class="dropdown-toggle-inner">Design & Build</a>
                                <ul class="sub-menu">
                                    <li><a href="custom-website-design.php">Custom Website Design</a></li>
                                    <li><a href="custom-website-development.php">Custom Website Development</a></li>
                                    <li><a href="ecommerce-web-development.php">E-Commerce Web Development</a></li>
                                    <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">Social Media</a>
                                <ul class="sub-menu">
                                    <li><a href="social-media-management.php">Social Media Management</a></li>
                                    <li><a href="social-media-advertising.php">Social Media Advertising</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">PPC & Paid Ads</a>
                                <ul class="sub-menu">
                                    <li><a href="google-ads-management.php">Google Ads Management</a></li>
                                    <li><a href="paid-social-advertising.php">Paid Social Advertising</a></li>
                                    <li><a href="amazon-ppc-management.php">Amazon PPC Management</a></li>
                                    <li><a href="amazon-dsp-advertising.php">Amazon DSP Advertising</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">SEO & Search</a>
                                <ul class="sub-menu">
                                    <li><a href="seo-services.php">SEO Services</a></li>
                                    <li><a href="local-seo-services.php">Local SEO</a></li>
                                    <li><a href="ecommerce-seo-services.php">E-Commerce SEO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo (in_array($currentPage, ['project.php', 'project-details.php'])) ? 'active' : ''; ?>"><a href="project.php">Our Portfolio</a></li>
                    <li class="<?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>"><a href="blog.php">Blog</a></li>
                    <li class="<?php echo ($currentPage == 'contact-us.php') ? 'active' : ''; ?>"><a href="contact-us.php">Contact Us</a></li>
                    <li><a href="contact-us.php" class="btn secondary-solid-btn check-btn">Free Consultation</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->