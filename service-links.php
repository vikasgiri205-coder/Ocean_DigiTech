<?php $sidebarServices = [
 'custom-website-design'=>'Website Design', 'custom-website-development'=>'Website Development',
 'ecommerce-web-development'=>'E-Commerce Development', 'mobile-app-development'=>'Mobile App Development',
 'social-media-management'=>'Social Media Management', 'social-media-advertising'=>'Social Media Advertising',
 'google-ads-management'=>'Google Ads', 'paid-social-advertising'=>'Paid Social Advertising',
 'amazon-ppc-management'=>'Amazon PPC', 'amazon-dsp-advertising'=>'Amazon DSP',
 'seo-services'=>'SEO Services', 'local-seo-services'=>'Local SEO', 'ecommerce-seo-services'=>'E-Commerce SEO'
]; ?>
<ul class="all-service-list"><?php foreach ($sidebarServices as $slug=>$label): ?><li><a href="<?= $slug ?>.php" <?= ($pageSlug ?? '')===$slug ? 'aria-current="page"' : '' ?>><?= htmlspecialchars($label) ?></a></li><?php endforeach; ?></ul>
