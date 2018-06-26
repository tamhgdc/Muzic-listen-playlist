<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 02:13
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?=$page_title;?> - <?=$sites->site_name;?></title>
    <meta name="description" content="<?=$page_description;?> - <?=$sites->site_name;?>"/>
    <meta name="keywords" content="<?=$page_keywords;?>"/>
    <meta content="Hung Nguyen" name="author"/>
    <meta name="robots" content="index,follow,nocache,noodp" />
    <meta name='revisit-after' content='1 days' />
    <meta property="og:title" content="<?=$page_title;?> - <?=$sites->site_name;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $canonical_url; ?>" />
    <meta property="og:image" content="<?php echo $image_src; ?>" />
    <meta property="og:site_name" content="<?=$sites->site_name;?>" />
    <meta property="og:description" content="<?=$page_title;?> - <?=$sites->site_name;?>" />
    <link href="<?php echo $author->facebook; ?>" rel="author" />
    <link href="<?php echo assets_url('statics/images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo trim($tracking->google_analytics_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo trim($tracking->google_analytics_id); ?>');
    </script>
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /*16:9*/
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body style="background-color: #111111">
<div class="video-container">
    <iframe
            width="100%"
            height="100%"
            src="https://www.youtube.com/embed/<?php echo trim($album_data['id']) ?>?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen>
    </iframe>
</div>
</body>
</html>
<!--
    - A production of Hung Nguyen <dev@nguyenanhung.com>
    - Page generation time: {elapsed_time}
    - Memory usage: {memory_usage}
 -->
