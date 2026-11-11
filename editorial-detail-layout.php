<?php
$isCaseStudy = $detailKind === 'case';
$detailSlug = is_string($slug) ? $slug : null;
$listingUrl = $isCaseStudy ? 'case-studies.php' : 'blog.php';
$listingLabel = $isCaseStudy ? 'Case Studies' : 'Blog';
$pageTitle = ($item['title'] ?? 'Page not found').' | Ocean DigiTech';
$heroTitle = $item['title'] ?? 'Page not found';
$heroDescription = $item
    ? ($isCaseStudy ? 'An illustrative project approach: the challenge, strategy, proposed solution, and measurement plan.' : 'Practical ideas and a clear approach to building better digital experiences and growing your business.')
    : 'This page could not be found. Explore our latest articles and project approaches to continue.';
$heroCategory = $isCaseStudy ? 'Case study' : 'Blog article';
$heroImage = $isCaseStudy ? 'img/editorial/code.jpg' : ($item['image'] ?? 'img/editorial/workspace.jpg');
$heroImageAlt = $isCaseStudy ? 'Software development workspace' : 'Digital strategy and engineering editorial photograph';
$heroCta = 'Discuss your project';
$heroCtaHref = 'contact-us.php#contact-form';
$sectionHeadings = array_keys($item['sections'] ?? []);
?>
<!doctype html>
<html lang="en">
<?php include __DIR__.'/main-header.php'; ?>
<body>
<?php include __DIR__.'/header.php'; ?>
<main class="main" id="main-content">
    <?php include __DIR__.'/inner-hero.php'; ?>
    <section class="service-details-section editorial-detail-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <article class="service-details-wrap editorial-detail-content">
                        <?php if ($item): ?>
                            <img src="<?= esc($item['image']) ?>" alt="<?= esc($isCaseStudy ? $item['title'].' — illustrative website concept' : $item['title']) ?>" class="img-fluid rounded shadow-sm detail-feature-image<?= $isCaseStudy ? ' detail-concept-image' : '' ?>">
                            <div class="services-detail-content mt-4">
                                <div class="detail-meta"><span><?= $isCaseStudy ? 'Illustrative case study' : 'Ocean DigiTech Insights' ?></span><span aria-hidden="true">/</span><span><?= count($sectionHeadings) ?> key sections</span></div>
                                <?php if ($isCaseStudy): ?>
                                    <p class="detail-disclosure">This illustrative study explains a proposed approach. It does not represent a verified client engagement or achieved results.</p>
                                <?php endif; ?>
                                <?php $sectionNumber = 0; foreach ($item['sections'] as $heading=>$copy): $sectionNumber++; ?>
                                    <section class="detail-text-section" id="detail-section-<?= $sectionNumber ?>">
                                        <h2><?= esc($heading) ?></h2>
                                        <p><?= esc($copy) ?></p>
                                    </section>
                                <?php endforeach; ?>
                                <div class="detail-next-step">
                                    <h2>Let’s discuss your next step.</h2>
                                    <p>Tell us about your goals and the challenges your team is facing.</p>
                                    <a class="btn secondary-solid-btn" href="contact-us.php#contact-form">Talk to Ocean DigiTech <svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ><use href="img/icons.svg?v=d285f5150a7c#arrow-up-right" width="100%" height="100%"></use></svg></a>
                                </div>
                                <a class="detail-back-link" href="<?= $listingUrl ?>">← Back to <?= $listingLabel ?></a>
                            </div>
                        <?php else: ?>
                            <h2>Find your next idea.</h2>
                            <p>Browse our <a href="<?= $listingUrl ?>"><?= $listingLabel ?></a> to find an available page.</p>
                        <?php endif; ?>
                    </article>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar-right pl-4" aria-label="<?= $isCaseStudy ? 'Case study' : 'Article' ?> navigation and services">
                        <?php if ($item): ?>
                        <section class="widget widget-categories detail-toc">
                            <div class="widget-title"><h2>On this page</h2></div>
                            <ol><?php foreach ($sectionHeadings as $index=>$heading): ?><li><a href="#detail-section-<?= $index+1 ?>"><?= esc($heading) ?></a></li><?php endforeach; ?></ol>
                        </section>
                        <?php endif; ?>
                        <section class="widget widget-categories">
                            <div class="widget-title"><h2>Our services</h2></div>
                            <?php include __DIR__.'/service-links.php'; ?>
                        </section>
                        <section class="widget widget-categories detail-help">
                            <div class="widget-title"><h2>Have a project in mind?</h2></div>
                            <p>Let’s find the right approach for your business.</p>
                            <a class="detail-contact-email" href="mailto:contact@oceandigitech.com">contact@oceandigitech.com</a>
                            <a class="btn secondary-solid-btn" href="contact-us.php#contact-form">Discuss your project <svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ><use href="img/icons.svg?v=d285f5150a7c#arrow-up-right" width="100%" height="100%"></use></svg></a>
                        </section>
                        <section class="widget widget-categories detail-related">
                            <div class="widget-title"><h2><?= $isCaseStudy ? 'More case studies' : 'More insights' ?></h2></div>
                            <ul><?php $relatedCount=0; foreach ($collection as $relatedSlug=>$related): if ($relatedSlug === $detailSlug) continue; if ($relatedCount++ >= 2) break; ?><li><a href="<?= $isCaseStudy ? 'case-study.php' : 'blog-details.php' ?>?slug=<?= rawurlencode($relatedSlug) ?>"><?= esc($related['title']) ?> <svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ><use href="img/icons.svg?v=d285f5150a7c#arrow-up-right" width="100%" height="100%"></use></svg></a></li><?php endforeach; ?></ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__.'/footer.php'; ?>
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
