<?php
header('Content-type: application/xml; charset="ISO-8859-1"',true);  
$datetime1 = new DateTime();
?>
<urlset
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
  <loc><?= base_url() ?></loc>
  <lastmod><?= $datetime1->format(DATE_ATOM); ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>0.1</priority>
</url>
<?php foreach($berita as $item) { $datetime = new DateTime($item['tanggal']);?>
<url>
  <loc><?= base_url($item['judul_seo']) ?></loc>
  <lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>0.5</priority>
</url>
<?php } ?>


<?php foreach($kategori as $item) { ?>
  <url>
    <loc><?= base_url($item['kategori_seo']) ?></loc>
    
    <changefreq>daily</changefreq>
    <priority>0.5</priority>
  </url>
<?php } ?>

<?php foreach($halaman as $item) { $datetime = new DateTime($item['tgl_posting']);?>
<url>
  <loc><?= base_url($item['judul_seo']) ?></loc>
  <lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>0.5</priority>
</url>
<?php } ?>
<?php foreach($tag as $item) { ?>
  <url>
    <loc><?= base_url($item['tag_seo']) ?></loc>
    <changefreq>daily</changefreq>
    <priority>0.5</priority>
  </url>
<?php } ?>
<?php foreach($sekilas as $item) { $datetime = new DateTime($item['tgl_posting']);?>
<url>
  <loc><?= base_url($item['info']) ?></loc>
  <lastmod><?= $datetime->format(DATE_ATOM); ?></lastmod>
  <changefreq>daily</changefreq>
  <priority>0.5</priority>
</url>
<?php } ?>


</urlset>