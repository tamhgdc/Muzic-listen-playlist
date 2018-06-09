<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/10/18
 * Time: 01:38
 */
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url><loc><?php echo base_url(); ?></loc><changefreq>always</changefreq><priority>1.0</priority></url>
    <?php foreach ($list_link as $link) { ?>
        <url><loc><?php echo trim($link); ?></loc><changefreq>always</changefreq><priority>0.9</priority></url>
    <?php } ?>
</urlset>
