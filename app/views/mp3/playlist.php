<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 6/2/18
 * Time: 03:20
 */
?>
$(document).ready(function(){
playlist = new jPlayerPlaylist({
jPlayer: "#jquery_jplayer_1",
cssSelectorAncestor: "#jp_container_1"
}, [<?= $playlist_data ?? null ?>], {
swfPath: "<?= assets_url('js') ?>",
solution: "html,flash,aurora",
supplied: "mp3, m4a",
wmode: "window",
smoothPlayBar: true,
keyEnabled: false,
playlistOptions: {
autoPlay: false,
loopOnPrevious: true,
shuffleOnLoop: true
},
loop: true
});
setTimeout(function() {
playlist.play();
}, 500);
});

