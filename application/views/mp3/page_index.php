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
    <meta name="description" content="<?=$page_title;?> - <?=$sites->site_name;?>"/>
    <meta name="keywords" content="<?=$sites->keywords;?>"/>
    <meta content="Hung Nguyen" name="author"/>
    <meta name="robots" content="index,follow,nocache,noodp" />
    <meta name='revisit-after' content='1 days' />
    <meta property="og:title" content="<?=$page_title;?> - <?=$sites->site_name;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $canonical_url; ?>" />
    <meta property="og:image" content="<?php echo assets_url('mp3/relax.jpg'); ?>" />
    <meta property="og:site_name" content="<?=$sites->site_name;?>" />
    <meta property="og:description" content="<?=$page_title;?> - <?=$sites->site_name;?>" />
    <link href="<?php echo $author->name; ?>" rel="author" />
    <link href="<?php echo assets_url('statics'); ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php echo assets_url('statics'); ?>/css/font-awesome.min.css" rel="stylesheet" />
    <!--[if IE 7]>
    <link href="<?php echo assets_url('statics'); ?>/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <![endif]-->
    <link href="<?php echo assets_url('statics'); ?>/css/quankhuya.css" rel="stylesheet" />
    <link href="<?php echo assets_url('statics'); ?>/css/jplayer.pink.flag.css" rel="stylesheet" />
    <link href="<?php echo assets_url('statics'); ?>/css/pink-modified.css" rel="stylesheet" />
    <link href="<?php echo assets_url('statics'); ?>/css/supersized.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo assets_url('statics'); ?>/css/index.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/jquery-1.9.1.min.js"> </script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/supersized.shutter.js"></script>
    <script type="text/javascript" src="<?php
    if (isset($current_playlist))
    {
        echo base_url('playlist/nhaccuatui/'.trim($current_playlist));
    }
    else
    {
        echo base_url('playlist/nhaccuatui/'.array_rand($list_playlist));
    }
    ?>"></script>
    <script language="javascript" type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
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
<div id="fb-root"></div>
<div class="nguyenanhung-wrapper">
    <?php
    if (isset($current_location_db['media_files']))
    {
        echo '<audio autoplay="autoplay" loop="loop" preload="auto"><source src="' . trim($current_location_db['media_files']) . '" type="audio/mpeg" />Trình duyệt của bạn không hỗ trợ HTML/audio template</audio>';
    }
    ?>
    <script type="text/javascript" src="<?php
    if (isset($current_location))
    {
        echo base_url('background/index/'.trim($current_location));
    }
    else
    {
        echo base_url('background/index/'.random_element($list_location_id));
    }
    ?>"></script>
    <a class="quankhuya-description" href="<?php echo base_url(); ?>" target="_blank"><?php echo $sites->site_name; ?></a>
    <div class="background-pattern"></div>
    <div class="page-like">
        <!-- <div class="fb-like" data-href="<?php echo base_url(); ?>" data-width="450" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div> -->
    </div>
</div><!--/wrapper-->
<div id="progress-back" class="load-item">
    <div id="progress-bar"></div>
</div><!--/progress-back-->
<div class="nguyenanhung-footer">
    <div class="logo"><?php echo $page_title; ?></div>
</div><!--/footer + slogan -->
<script type="text/javascript">
    $(document).ready(function (){
        $(".tab-click-item").click(function() {
            if ($(this).hasClass("selected")) {
                setTimeout(function (){
                    $("#list-menu-selection li a.selected").removeClass("selected");
                    $(".tab-item").hide();
                    $(".tab-container").hide();
                }, 0);
            }
            $(".tab-container").show();
            $(".location-tag").removeClass("selected");
            $(".music-tag").removeClass("selected");
        });
        $("#list-menu-selection").idTabs("show-change");
        $("#tab-close").click(function (){
            $("#list-menu-selection li a.selected").removeClass("selected");
            $(".tab-item").hide();
            $(".tab-container").hide();
        });
    });
</script>
<ul id="list-menu-selection">
    <li><a class="tab-click-item" href="#my-player"><img src="<?php echo assets_url('statics'); ?>/images/playlist_icon.png"/></a></li><!--/player-->
    <li><a class="tab-click-item" href="#show-comment"><img src="<?php echo assets_url('statics'); ?>/images/comment_icon.png"/><div class="noti_bubble"><fb:comments-count href="<?php echo $canonical_url; ?>">0</fb:comments-count></div></a></li><!--/comment user facebook -->
    <li><a class="tab-click-item" href="#show-change"><i class="icon-cog"></i></a></li><!--/change music style -->
</ul>
<!-- Phần content chính kết thúc ở đây -->
<div class="tab-container">
    <div id="tab-close" class="tab-close">
        <i class="icon-remove"></i>
    </div>
    <div class="tab-item" id="show-change">
        <div id="change-popup" class="change-popup">
            <div class="i-want-to">Tôi muốn đến...</div>
            <div class="choice-tag">
                <?php
                foreach ($list_location as $key => $value)
                {
                    echo '<div tag-id="' . trim($key) . '" class="item location-tag">' . trim($value['name']) . '</div>';
                }
                ?>
            </div><!--/choice-tag - địa điểm -->
            <div class="i-want-to">và thưởng thức...</div>
            <div class="choice-tag">
                <?php
                foreach ($list_playlist as $key => $value)
                {
                    echo '<div tag-id="' . trim($key) . '" class="item music-tag">' . trim($value['name']) . '</div>';
                }
                ?>
            </div><!--/choice-tag - gu nhạc -->
            <div class="change-button-list">
                <a class="button" id="btnPlayNow"><i class="icon-play"></i> Play Now !</a>
                <a class="button" href="<?php echo base_url('musics'); ?>" target="_self">Play Random <i class="icon-magic"></i></a>
            </div><!--/button change-->
        </div>
    </div><!--/change style-->
    <div class="tab-item" id="show-comment">
        <div class="fb-comments" data-href="<?php echo $canonical_url; ?>" data-width="280" data-num-posts="5" data-colorscheme="dark"></div>
    </div><!--/khung comment-->
    <div id="my-player" class="my-player tab-item">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-playlist">
                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        <li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
                        <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                        <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                    </ul>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>
                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-current-time"></div>
                    <div class="jp-duration"></div>
                    <ul class="jp-toggles">
                        <li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
                        <li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
                        <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                        <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                    </ul>
                </div>
                <div class="jp-playlist">
                    <ul>
                        <li></li>
                    </ul>
                </div>
                <div class="jp-no-solution">
                    <span>Thông báo</span>Để nghe được nhạc, yêu cầu trình duyệt phải được kích hoạt Flash Player, download tại đây <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                </div><!--/thông báo dành cho trình duyệt không có flash player-->
            </div>
        </div>
    </div><!--/tất cả options của player -->
</div>
<div class="fanpage-like">
    <!-- <div class="fb-like" data-href="<?php echo $canonical_url; ?>" data-send="false" data-width="80" data-show-faces="false" data-colorscheme="dark"></div> -->
    <div class="fb-like" data-href="<?php echo $canonical_url; ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div><!--/fanpage-like-->
<script type="text/javascript" src="<?php echo assets_url('statics'); ?>/js/index.js"></script>
</body>
</html>
