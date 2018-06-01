<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/1/18
 * Time: 11:14
 */
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title><?=$site_data->site_name;?></title>
    <!-- Meta Contents -->
    <meta name="generator" content="<?=$site_data->site_name;?>">
    <meta name="copyright" content="<?=$site_data->site_name;?>"/>
    <meta name="generator" content="<?=$site_data->site_name;?>"/>
    <meta name="author" content="<?=$author->name;?>"/>
    <meta name="description" content="<?=$site_data->description;?>">
    <meta name="keywords" content="<?=$site_data->keywords;?>">
    <!-- Site Property -->
    <meta property="fb:app_id" content="<?=$site_data->fb_app_id;?>"/>
    <meta property="fb:admins" content="<?=$site_data->fb_admins;?>"/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?=$site_data->site_name;?>"/>
    <meta property="og:description" content="<?=$site_data->description;?>"/>
    <meta property="og:url" content="<?=base_url();?>"/>
    <meta property="og:image" content="<?php echo assets_url('images/pictures.jpg'); ?>"/>
    <meta property="og:site_name" content="<?=$site_data->site_name;?>"/>
    <meta itemprop="title" content="<?=$site_data->site_name;?>"/>
    <meta itemprop="description" content="<?=$site_data->description;?>"/>
    <meta itemprop="url" content="<?=base_url();?>"/>
    <meta itemprop="image" content="<?php echo assets_url('images/pictures.jpg'); ?>"/>
    <?php $this->load->view('favicon');?>
    <link rel="bookmark" href="<?=base_url();?>"/>
    <link rel="canonical" href="<?=base_url();?>"/>
    <link rel="image_src" href="<?php echo assets_url('images/pictures.jpg'); ?>"/>
    <!-- Resource -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href="<?php echo assets_url('css/index_style.min.css'); ?>" rel='stylesheet' type='text/css'>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo trim($tracking->google_analytics_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo trim($tracking->google_analytics_id); ?>');
    </script>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="<?php echo $author->avatar->small; ?>" width="100" alt="NguyenAnHung.com">
    </div>
    <div class="row w text-center">
        <div class="col-lg-6 col-lg-offset-3 text-justify">
            <h3>Hi there!</h3>
            <p>
                I'm Hung and I'm a software engineer in Hanoi, Vietnam.
            </p>
            <p>
                I'm working for a PHP software development company in Hanoi (Vietnam). I'm familiar with PHP, MySQL, Python, TypeScript, NodeJS, VAS Service and Team leader ...
            </p>
            <p>
                Some of the things that I enjoy include: foods, travel, kungfu and photography. If you'd like to chat about them or anything else, feel free to get in touch with me on <a href="<?=$author->twitter;?>" target="_blank">Twitter</a>, <a href="mailto:<?=$author->email;?>">email</a> or <a href="<?=$author->blog;?>" target="_blank">blog</a>.
            </p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
            <a data-toggle="tooltip" title="Facebook" href="<?=$author->facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a data-toggle="tooltip" title="Twitter" href="<?=$author->twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a data-toggle="tooltip" title="Instagram" href="<?=$author->instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <a data-toggle="tooltip" title="Github" href="<?=$author->github;?>" target="_blank"><i class="fa fa-github"></i></a>
            <a data-toggle="tooltip" title="Blogging" href="<?=$author->blog;?>" target="_blank"><i class="fa fa-beer"></i></a>
            <a data-toggle="tooltip" title="Email Me!" href="mailto:<?=$author->email;?>" target="_blank"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
</script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js'></script>
<script>
    $.backstretch("<?php echo assets_url('images/bg.jpg'); ?>", { speed: 500 });
</script>
</body>
</html>
