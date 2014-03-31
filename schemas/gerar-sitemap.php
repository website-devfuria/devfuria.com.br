<?php
ini_set('display_errors', 'on');
ini_set('track_errors', 'on');
ini_set('html_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

require "../core/boot.php";
$model = new Model();
$hoje = date("Y-m-d");
header("Content-Type: application/xml; charset=UTF-8");
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>http://www.devfuria.com.br/php/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>http://www.devfuria.com.br/js/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>http://www.devfuria.com.br/html-css/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>http://www.devfuria.com.br/mysql-sql/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>http://www.devfuria.com.br/regexp/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>http://www.devfuria.com.br/logica-de-programacao/</loc>
        <lastmod><?php echo $hoje; ?></lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <?php foreach ($model->getPaginaAll() as $pagina): ?>
        <url>
            <loc><?php echo LINKS_PATH . $pagina->url ?></loc>
            <lastmod><?php echo $pagina->dtAtualizacao ?></lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.1</priority>
        </url>
    <?php endforeach; ?>
</urlset>
