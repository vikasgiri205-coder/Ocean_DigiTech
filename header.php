

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$pageSlug = preg_replace('/\.php$/', '', $currentPage);
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$reqSlug = basename(rtrim($reqPath, '/'));

$isHome = ($pageSlug === 'index' || empty($pageSlug) || $pageSlug === 'Ocean_Digitech' || rtrim($reqPath, '/') === '/Ocean_Digitech' || $reqPath === '/' || rtrim($reqPath, '/') === '');
?>
<style>
  .mega-menu .subtext {
    display: block;
    font-size: 12px;
    color: #808080;
    margin-top: 5px;
    font-weight: 400;
  }
  /* Ultra-Sleek & Low-Profile Navbar */
  .header nav.navbar.mega-menu {
    padding: 2px 1rem !important;
    min-height: 50px !important;
    background: #ffffff !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03) !important;
    display: flex !important;
    align-items: center !important;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.3s ease, box-shadow 0.3s ease !important;
    transform: translateY(0);
    will-change: transform;
  }
  .header nav.navbar.mega-menu.navbar-hidden {
    transform: translateY(-115%) !important;
  }
  .header nav.navbar.mega-menu.navbar-visible {
    transform: translateY(0) !important;
  }
  .navbar-brand {
    padding: 0 !important;
    margin: 0 !important;
    display: flex !important;
    align-items: center !important;
  }
  .brand-logo {
    height: 32px !important;
    width: auto !important;
    max-height: 32px !important;
    object-fit: contain !important;
    transition: all 0.3s ease;
  }
  @media (max-width: 768px) {
    .brand-logo {
      height: 28px !important;
      max-height: 28px !important;
    }
  }

  /* Compact Navigation Links */
  .menu li a,
  .navbar-nav.menu li a {
    padding: 6px 11px !important;
    font-size: 13px !important;
    line-height: 1.3 !important;
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
    bottom: -2px;
    left: 11px;
    right: 11px;
    height: 2.5px;
    background: #e80566;
    border-radius: 3px;
  }
  .menu li > a:hover,
  .navbar-nav li > a:hover {
    color: #e80566 !important;
    opacity: 1 !important;
  }

  /* Consultation Button inside Navbar */
  .check-btn,
  .btn.secondary-solid-btn.check-btn {
    padding: 6px 16px !important;
    margin-left: 8px;
    font-size: 12.5px !important;
    border-radius: 6px !important;
    line-height: 1.3 !important;
  }
</style>

<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top white-bg mega-menu">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="./">
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
                    <li class="<?php echo ($pageSlug === 'about-us' || $currentPage == 'about-us.php') ? 'active' : ''; ?>"><a href="about-us">About</a></li>
                    <li class="dropdown-nav <?php echo (in_array($pageSlug, ['custom-website-design','custom-website-development','ecommerce-web-development','mobile-app-development','social-media-management','social-media-advertising','google-ads-management','paid-social-advertising','amazon-ppc-management','amazon-dsp-advertising','seo-services','local-seo-services','ecommerce-seo-services','services'])) ? 'active' : ''; ?>">
                        <a href="services" class="dropdown-toggle">Services</a>
                        <ul class="sub-menu">
                            <li><a href="#" class="dropdown-toggle-inner">Design & Build</a>
                                <ul class="sub-menu">
                                    <li><a href="custom-website-design">Custom Website Design</a></li>
                                    <li><a href="custom-website-development">Custom Website Development</a></li>
                                    <li><a href="ecommerce-web-development">E-Commerce Web Development</a></li>
                                    <li><a href="mobile-app-development">Mobile App Development</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">Social Media</a>
                                <ul class="sub-menu">
                                    <li><a href="social-media-management">Social Media Management</a></li>
                                    <li><a href="social-media-advertising">Social Media Advertising</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">PPC & Paid Ads</a>
                                <ul class="sub-menu">
                                    <li><a href="google-ads-management">Google Ads Management</a></li>
                                    <li><a href="paid-social-advertising">Paid Social Advertising</a></li>
                                    <li><a href="amazon-ppc-management">Amazon PPC Management</a></li>
                                    <li><a href="amazon-dsp-advertising">Amazon DSP Advertising</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle-inner">SEO & Search</a>
                                <ul class="sub-menu">
                                    <li><a href="seo-services">SEO Services</a></li>
                                    <li><a href="local-seo-services">Local SEO</a></li>
                                    <li><a href="ecommerce-seo-services">E-Commerce SEO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo (in_array($pageSlug, ['project', 'project-details']) || in_array($currentPage, ['project.php', 'project-details.php'])) ? 'active' : ''; ?>"><a href="project">Our Portfolio</a></li>
                    <li class="<?php echo ($pageSlug === 'blog' || $currentPage == 'blog.php') ? 'active' : ''; ?>"><a href="blog">Blog</a></li>
                    <li class="<?php echo ($pageSlug === 'contact-us' || $currentPage == 'contact-us.php') ? 'active' : ''; ?>"><a href="contact-us">Contact Us</a></li>
                    <li><a href="contact-us" class="btn secondary-solid-btn check-btn">Free Consultation</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--header section end-->