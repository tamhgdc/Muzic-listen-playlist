<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/10/18
 * Time: 01:38
 */
?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <?php if (isset($list_album)) {
        foreach ($list_album as $album) { ?>
            <url>
                <loc><?= trim($album) ?></loc>
                <changefreq>always</changefreq>
                <priority>0.9</priority>
            </url>
        <?php }
    } ?>
    <?php if (isset($list_link)) {
        foreach ($list_link as $link) { ?>
            <url>
                <loc><?= trim($link) ?></loc>
                <changefreq>always</changefreq>
                <priority>0.9</priority>
            </url>
        <?php }
    } ?>
</urlset>
