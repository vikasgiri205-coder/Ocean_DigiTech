<?php
// Shared inner-page hero. Callers provide a title, description, category, and image.
$heroTitle = $heroTitle ?? 'Ocean DigiTech';
$heroDescription = $heroDescription ?? 'Thoughtful digital solutions, built around your business.';
$heroCategory = $heroCategory ?? 'Ocean DigiTech';
$heroImage = $heroImage ?? 'img/editorial/workspace.jpg';
$heroImageAlt = $heroImageAlt ?? 'A bright collaborative workspace';
$heroCta = $heroCta ?? 'Let’s talk about your project';
$heroCtaHref = $heroCtaHref ?? 'contact-us.php';
?><section class="inner-hero" aria-labelledby="inner-page-title">
 <div class="container"><nav class="inner-breadcrumb" aria-label="Breadcrumb"><a href="index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page"><?= htmlspecialchars($heroCategory) ?></span></nav>
 <div class="inner-hero-grid"><div class="inner-hero-copy"><span class="inner-eyebrow"><span aria-hidden="true"></span><?= htmlspecialchars($heroCategory) ?></span><h1 id="inner-page-title"><?= htmlspecialchars($heroTitle) ?></h1><p><?= htmlspecialchars($heroDescription) ?></p><a class="btn secondary-solid-btn inner-hero-cta" href="<?= htmlspecialchars($heroCtaHref) ?>"><?= htmlspecialchars($heroCta) ?> <svg class="od-icon" viewBox="0 0 24 24" width="1em" height="1em" aria-hidden="true" focusable="false" ><use href="img/icons.svg?v=d285f5150a7c#arrow-up-right" width="100%" height="100%"></use></svg></a><div class="inner-hero-footnote">Good thinking. Thoughtful execution.</div></div>
 <div class="inner-hero-visual"><img src="<?= htmlspecialchars($heroImage) ?>" alt="<?= htmlspecialchars($heroImageAlt) ?>" width="640" height="480" fetchpriority="high"><div class="inner-hero-caption"><span class="inner-visual-mark" aria-hidden="true">↗</span><div><small>A considered approach</small><strong>Clarity in every detail.</strong></div></div><span class="inner-visual-tag">Strategy <span aria-hidden="true">/</span> Design <span aria-hidden="true">/</span> Technology</span></div>
 </div></div></section>