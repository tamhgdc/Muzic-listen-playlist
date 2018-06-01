<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
}, [
<?php echo $playlist_data; ?>
], {
swfPath: "<?php echo assets_url('statics/js'); ?>",
supplied: "mp3",
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

