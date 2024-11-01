<?php
// code add muc luc setting admin
function share_mxh_options_page() {
	global $sharemxh_options;
	ob_start(); ?>
	<div class="wrap" style="font-size:15px;">
		<h2 style="background:#0c0;padding:10px;color:#fff;"><b><?php echo __('Share MXH Settings', 'share-mxh'); ?></b></h2>
		<form method="post" action="options.php">
			<?php settings_fields('sharemxh_settings_group'); ?>
		   <h4 style="font-size:20px;color:#444"><?php _e('Adjust according to your preferences', 'share-mxh'); ?></h4>
		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Change color', 'share-mxh'); ?></b></div>
		       <?php $styles = array('Blue', 'Green', 'Black', 'Moss', 'Nature', 'Dark'); ?>
               <select name="sharemxh_settings[theme]" id="sharemxh_settings[theme]" > 
               <?php foreach($styles as $style) { ?> 
               <?php if($sharemxh_options['theme'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
               <option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option> 
               <?php } ?> 
               </select>
		   </div>
		   
		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Effects on hover', 'share-mxh'); ?></b></div>
		       <?php $hovers = array('Opacity', 'Zoom', 'Blur', 'Shadow'); ?>
               <select name="sharemxh_settings[hover]" id="sharemxh_settings[hover]" > 
               <?php foreach($hovers as $hover) { ?> 
               <?php if($sharemxh_options['hover'] == $hover) { $selecteh = 'selected="selecteh"'; } else { $selecteh = ''; } ?>
               <option value="<?php echo $hover; ?>" <?php echo $selecteh; ?>><?php echo $hover; ?></option> 
               <?php } ?> 
               </select>
		   </div>
		   
		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Display location', 'share-mxh'); ?></b></div>
		       <?php $locas = array('Bottom', 'Top'); ?>
               <select name="sharemxh_settings[loca]" id="sharemxh_settings[loca]" > 
               <?php foreach($locas as $loca) { ?> 
               <?php if($sharemxh_options['loca'] == $loca) { $selecte = 'selected="selecte"'; } else { $selecte = ''; } ?>
               <option value="<?php echo $loca; ?>" <?php echo $selecte; ?>><?php echo $loca; ?></option> 
               <?php } ?> 
               </select>
		   </div>
		   
		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Border board', 'share-mxh'); ?></b></div>
		       <?php $boviens = array('Round', 'Square', 'Leaves', 'Mushroom', 'light'); ?>
               <select name="sharemxh_settings[bovien]" id="sharemxh_settings[bovien]" > 
               <?php foreach($boviens as $bovien) { ?> 
               <?php if($sharemxh_options['bovien'] == $bovien) { $selectebo = 'selected="selectebo"'; } else { $selectebo = ''; } ?>
               <option value="<?php echo $bovien; ?>" <?php echo $selectebo; ?>><?php echo $bovien; ?></option> 
               <?php } ?> 
               </select>
		   </div>
		   
           <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div><b style="font-size:18px;"><?php _e('Hide auto show', 'share-mxh'); ?></b></div>
			   <?php _e('Hide to use the code shortcode below.', 'share-mxh'); ?><p />
		       <input id="sharemxh_settings[enable]" type="checkbox" name="sharemxh_settings[enable]" value="1" <?php checked('1', $sharemxh_options['enable']); ?> />
               <label class="description" for="mfwp_settings[enable]"><?php _e('Hidden', 'share-mxh'); ?></label>
			   <div style="margin-top:20px;"><b style="font-size:18px;"><?php _e('Using Shortcode, add the position you want to display', 'share-mxh'); ?></b>
			   <br><?php _e('You can use the shortcode below to paste in your post, or code where you want to display the Share MXH.', 'share-mxh'); ?>
			   <p style="font-size:20px;background:#f1f1f1;color:#111;padding:5px;border:1px solid #777">[sharemxh]</p>
			   <p style="font-size:20px;background:#f1f1f1;color:#111;padding:5px;border:1px solid #777">&lt;?php echo do_shortcode( &#39;[sharemxh]&#39; ); ?&gt;</p>
			   </div>
		   </div>
		   
		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		       <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Hide social icons', 'share-mxh'); ?></b></div>
		       <input id="sharemxh_settings[facebook]" type="checkbox" name="sharemxh_settings[facebook]" value="1" <?php checked('1', $sharemxh_options['facebook']); ?> />
               <label class="description"><?php _e('Hidden Facebook', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[twitter]" type="checkbox" name="sharemxh_settings[twitter]" value="1" <?php checked('1', $sharemxh_options['twitter']); ?> />
               <label class="description"><?php _e('Hidden Twitter', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[pinterest]" type="checkbox" name="sharemxh_settings[pinterest]" value="1" <?php checked('1', $sharemxh_options['pinterest']); ?> />
               <label class="description"><?php _e('Hidden Pinterest', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[telegram]" type="checkbox" name="sharemxh_settings[telegram]" value="1" <?php checked('1', $sharemxh_options['telegram']); ?> />
               <label class="description"><?php _e('Hidden Telegram', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[linkedin]" type="checkbox" name="sharemxh_settings[linkedin]" value="1" <?php checked('1', $sharemxh_options['linkedin']); ?> />
               <label class="description"><?php _e('Hidden Linkedin', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[reddit]" type="checkbox" name="sharemxh_settings[reddit]" value="1" <?php checked('1', $sharemxh_options['reddit']); ?> />
               <label class="description"><?php _e('Hidden Reddit', 'share-mxh'); ?></label>
			   <br>
			   <input id="sharemxh_settings[tumblr]" type="checkbox" name="sharemxh_settings[tumblr]" value="1" <?php checked('1', $sharemxh_options['tumblr']); ?> />
               <label class="description"><?php _e('Hidden Tumblr', 'share-mxh'); ?></label>
			   <br>
		   </div>

		   <div style="margin-top:20px;background:#fff;padding:10px;border-left:3px solid #0c0">
		        <div style="margin-bottom:20px;"><b style="font-size:18px;"><?php _e('Social sharing title', 'share-mxh'); ?></b></div>
				<p><label class="description" for="sharemxh_settings[title-name]"><?php _e('Title sharing', 'share-mxh'); ?></label></p>
				<input id="sharemxh_settings[title-name]" name="sharemxh_settings[title-name]" type="text" value="<?php echo $sharemxh_options['title-name']; ?>"/>
			</div>
		   <div class="submit"><input style="background:#0c0;color:#fff;padding: 2px 10px 2px 10px;border:none;font-size:18px;" type="submit" class="button-primary" value="<?php _e('Save settings', 'share-mxh'); ?>" /></div>
		</form>
	<div style="font-size:20px;"><?php _e('Thank you for using our plugin', 'share-mxh'); ?> | <?php _e('by', 'share-mxh'); ?> <a href="https://caodem.com">Caodem.com</a></div>
	</div>
	<?php
	echo ob_get_clean();
}
// add muc luc menu admin
function share_mxh_add_options_link() {
	add_options_page('Sahre MXH Options', 'Share MXH', 'manage_options', 'sharemxh-options', 'share_mxh_options_page');
}
add_action('admin_menu', 'share_mxh_add_options_link');
// add thong tin vao database
function share_mxh_register_settings() {
	register_setting('sharemxh_settings_group', 'sharemxh_settings');
}
add_action('admin_init', 'share_mxh_register_settings');