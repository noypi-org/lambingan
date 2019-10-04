<?php
$a = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'];

if( isset($_SERVER['HTTP_CF_VISITOR']) ) {
}

header('Content-Type: application/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
echo "<url><loc>".$a."</loc><lastmod>".date('Y-m-d')."</lastmod><changefreq>hourly</changefreq><priority>1.00</priority></url>";
echo "</urlset>";
