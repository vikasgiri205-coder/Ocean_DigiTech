<?php
$teamMembers = [
    ['name' => 'Vikas Giri', 'role' => 'Chief Executive Officer (CEO)', 'image' => 'img/team-member-1.png', 'description' => 'Leading company strategy, client partnerships, and business growth.'],
    ['name' => 'Manjari Gautam', 'role' => 'Chief Technology Officer (CTO)', 'image' => 'img/manjari-gautam.jpeg', 'description' => '', 'linkedin' => 'https://www.linkedin.com/in/manjarigautam/'],
    ['name' => 'RK Sureria', 'role' => 'Full Stack Developer', 'image' => 'img/rk-sureria.png', 'description' => 'Building dependable web applications, APIs, and connected digital experiences.'],
    ['name' => 'Aditya', 'role' => 'UI/UX Designer', 'image' => 'img/aditya-ui-ux-designer.jpeg', 'description' => 'Crafting intuitive user interfaces and modern visual design systems.'],
];
foreach ($teamMembers as $member): ?>
<div class="col-md-6 col-lg-3 mb-4">
    <article class="team-card-modern real-team-card">
        <div class="team-img-modern-wrap">
            <img src="<?= htmlspecialchars($member['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($member['name'] . ', ' . $member['role'], ENT_QUOTES, 'UTF-8') ?>" class="img-fluid" loading="lazy">
        </div>
        <div class="team-card-body-modern">
            <h5 class="team-card-name"><?= htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8') ?></h5>
            <div class="team-card-role"><?= htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8') ?></div>
            <?php if ($member['description'] !== ''): ?>
            <p class="text-muted"><?= htmlspecialchars($member['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <?php endif; ?>
            <?php if (isset($member['linkedin'])): ?>
            <a class="team-linkedin" href="<?= htmlspecialchars($member['linkedin'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" aria-label="Connect with Manjari Gautam on LinkedIn">LinkedIn <span aria-hidden="true">&#8599;</span></a>
            <?php endif; ?>
        </div>
    </article>
</div>
<?php endforeach; ?>
