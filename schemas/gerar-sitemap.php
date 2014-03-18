<?php
header("Content-Type: application/xml; charset=UTF-8");
require "../core/boot.php";
$paginas = new Paginas();
?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <?php foreach ($paginas->getAll() as $pagina): ?>
        <url>
            <loc><?php echo LINKS_PATH . $pagina->url ?></loc>
            <lastmod><?php echo $pagina->dtAtualizacao ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    <?php endforeach; ?>
</urlset>
