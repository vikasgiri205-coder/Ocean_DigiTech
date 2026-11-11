<?php
header('Cache-Control: no-cache, must-revalidate');
require __DIR__.'/editorial-content.php';
$detailKind = 'blog';
$collection = $articles;
$slug = $_GET['slug'] ?? 'scalable-web-architecture';
$item = is_string($slug) ? ($collection[$slug] ?? null) : null;
if (!$item) http_response_code(404);
function esc($value) { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
require __DIR__.'/editorial-detail-layout.php';
