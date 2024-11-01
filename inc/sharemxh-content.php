<?php
// add content
function share_mxh_add_content($content) {
global $sharemxh_options;
if(is_singular('post')) {
ob_start();
?>
<div class="share">
<div class="titleshare <?php echo $sharemxh_options['theme']; ?>"><?php echo $sharemxh_options['title-name']; ?> </div>
<div class="iconshare <?php echo $sharemxh_options['hover']; ?>">
<?php if($sharemxh_options['facebook'] == false) { ?>
<a title="Facebook" class="share-f <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Facebook" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-f.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['twitter'] == false) { ?>
<a title="Twitter" class="share-t <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Twitter" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-t.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['pinterest'] == false) { ?>
<a title="Pinterest" class="share-p <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://www.pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>&media=<?php echo the_post_thumbnail_url('large'); ?>&description=<?php echo get_the_title(get_the_ID()); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Pinterest" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-p.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['telegram'] == false) { ?>
<a title="Telegram" class="share-tl <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://t.me/share/url?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(get_the_ID()); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Telegram" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-tl.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['linkedin'] == false) { ?>
<a title="Linkedin" class="share-in <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Linkedin" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-in.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['reddit'] == false) { ?>
<a title="Reddit" class="share-rd <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="https://reddit.com/submit?title=<?php echo get_the_title(get_the_ID()); ?>&url=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Reddit" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-rd.svg', __FILE__); ?>" width="35" /></a>
<?php } if($sharemxh_options['tumblr'] == false) { ?>
<a title="Tumbler" class="share-tb <?php echo $sharemxh_options['theme']; ?> <?php echo $sharemxh_options['bovien']; ?>" href="http://tumblr.com/widgets/share/tool?canonicalUrl=<?php the_permalink(); ?>" onclick='window.open(this.href,&quot;popupwindow&quot;,&quot;status=0,height=500,width=500,resizable=0,top=50,left=100&quot;);return false;' rel='nofollow' target="_blank"><img title="Tumbler" style="margin:0px;padding:0px;border:0px;display:initial;max-width:35px;" src="<?php echo plugins_url('img/icon-tb.svg', __FILE__); ?>" width="35" /></a>
<?php } ?>
</div>
</div>
<?php
global $sharemxh_shortcode;
$sharemxh_shortcode = $sharemxh_shortcodes  = ob_get_clean();
if($sharemxh_options['enable'] == true) {$sharemxh_shortcodes = "";} 
if ($sharemxh_options['loca'] == "Bottom"){
	$sharemxh_out = $sharemxh_shortcodes;
	$sharemxh_top = ""; 
	} 
elseif ($sharemxh_options['loca'] == "Top"){
    $sharemxh_top = $sharemxh_shortcodes; 
    $sharemxh_out = ""; 
	echo "<style>.share{margin-top:0px !important}</style>";
    } 
return $sharemxh_top . $content . $sharemxh_out;
}else {
return $content;
}
}
add_filter('the_content', 'share_mxh_add_content');

//add shortcode

function share_mxh_add_shortcode() {
	global $sharemxh_shortcode;
	return $sharemxh_shortcode;
}
add_shortcode( 'sharemxh', 'share_mxh_add_shortcode' );

