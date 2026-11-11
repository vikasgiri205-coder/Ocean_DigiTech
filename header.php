<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? 'index.php');
$pageSlug = pathinfo($currentPage, PATHINFO_FILENAME);
$serviceGroups = [
 'Design & Build' => ['custom-website-design'=>'Custom Website Design','custom-website-development'=>'Website Development','ecommerce-web-development'=>'E-Commerce Development','mobile-app-development'=>'Mobile App Development'],
 'Social Media' => ['social-media-management'=>'Social Media Management','social-media-advertising'=>'Social Media Advertising'],
 'PPC & Paid Ads' => ['google-ads-management'=>'Google Ads Management','paid-social-advertising'=>'Paid Social Advertising','amazon-ppc-management'=>'Amazon PPC Management','amazon-dsp-advertising'=>'Amazon DSP Advertising'],
 'SEO & Search' => ['seo-services'=>'SEO Services','local-seo-services'=>'Local SEO','ecommerce-seo-services'=>'E-Commerce SEO']
];
$serviceSlugs = array_merge(...array_map('array_keys', array_values($serviceGroups)));
?>
<header class="header site-header">
 <a class="skip-navigation" href="#main-content">Skip to content</a>
 <nav class="navbar fixed-top site-navigation" aria-label="Main navigation">
  <div class="container site-nav-container">
   <a class="navbar-brand" href="index.php" aria-label="Ocean DigiTech home"><img src="img/logo-main.png" width="108" height="62" alt="Ocean DigiTech" class="brand-logo header-logo-main"></a>
   <button class="site-menu-toggle" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"><span class="menu-toggle-icon" aria-hidden="true"></span><span class="menu-toggle-label">Menu</span></button>
   <div id="navbarSupportedContent" class="site-menu-panel" data-open="false">
    <ul class="site-nav-list">
     <li><a href="index.php" <?= $pageSlug==='index' ? 'aria-current="page"' : '' ?>>Home</a></li>
     <li><a href="about-us.php" <?= $pageSlug==='about-us' ? 'aria-current="page"' : '' ?>>About</a></li>
     <li class="site-nav-dropdown">
      <div class="site-nav-row"><a href="services.php" <?= $pageSlug==='services' || in_array($pageSlug,$serviceSlugs) ? 'aria-current="page"' : '' ?>>Services</a><button class="nav-submenu-toggle" type="button" aria-expanded="false" aria-controls="services-menu" aria-label="Show services menu"><svg class="nav-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m6 9 6 6 6-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></button></div>
      <ul class="site-submenu" id="services-menu">
       <li class="nav-menu-heading" aria-hidden="true">Explore our expertise</li>
       <li class="mobile-services-overview"><a href="services.php">All services <svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ><use href="img/icons.svg?v=d285f5150a7c#arrow-right" width="100%" height="100%"></use></svg></a></li>
       <?php $groupIndex=0; foreach ($serviceGroups as $group=>$links): $groupIndex++; ?>
       <li class="site-nav-dropdown"><div class="site-nav-row"><button class="nav-submenu-toggle nav-category-toggle" type="button" aria-expanded="false" aria-controls="service-group-<?= $groupIndex ?>" aria-label="Show <?= htmlspecialchars($group) ?> services"><span class="nav-category-icon" aria-hidden="true"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" focusable="false"><path d="<?= [1=>'m8 6-6 6 6 6m8-12 6 6-6 6m-3-14-2 16',2=>'M21 11.5a8.5 8.5 0 0 1-8.5 8.5H4l-2 2v-8.5A8.5 8.5 0 1 1 21 11.5Z',3=>'M4 19V9m8 10V4m8 15v-6M2 22h20',4=>'m21 21-5-5M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z'][$groupIndex] ?>" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="nav-category-text"><?= htmlspecialchars($group) ?></span><svg class="nav-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="m6 9 6 6 6-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg></button></div><ul class="site-submenu" id="service-group-<?= $groupIndex ?>"><?php foreach ($links as $slug=>$label): ?><li><a href="<?= $slug ?>.php" <?= $pageSlug===$slug ? 'aria-current="page"' : '' ?>><?= htmlspecialchars($label) ?></a></li><?php endforeach; ?></ul></li>
       <?php endforeach; ?>
      </ul>
     </li>
     <li><a href="project.php" <?= in_array($pageSlug,['project','project-details']) ? 'aria-current="page"' : '' ?>>Portfolio</a></li>
     <li><a href="case-studies.php" <?= in_array($pageSlug,['case-studies','case-study']) ? 'aria-current="page"' : '' ?>>Case Studies</a></li>
     <li><a href="blog.php" <?= in_array($pageSlug,['blog','blog-details']) ? 'aria-current="page"' : '' ?>>Blog</a></li>
     <li><a href="contact-us.php" <?= $pageSlug==='contact-us' ? 'aria-current="page"' : '' ?>>Contact</a></li>
     <li class="site-nav-cta"><a href="contact-us.php" class="btn secondary-solid-btn check-btn">Free Consultation <svg class="nav-cta-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M6 18 18 6M6 6h12v12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></li>
    </ul>
   </div>
  </div>
 </nav>
</header>
<script src="js/theme.js?v=<?= substr(hash_file('sha256', __DIR__ . '/js/theme.js'), 0, 12) ?>" defer></script>
