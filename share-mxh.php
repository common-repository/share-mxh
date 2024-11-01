<?php
/**
* Plugin name: Share MXH
* Plugin URL: https://www.caodem.com
* Description: Share on social networks for articles.
* Domain Path: /languages
* Version: 1.2
* Author: ihoan caodem.com
* Author URL: https://www.caodem.com
* License: GPLv3 or later
/**
* Share on social networks for articles by ihoan caodem.com
*/
// add hook css share mxh
function Share_mxh_addcss_head() {
wp_enqueue_style( 'sharemxh-stylecss', plugins_url( 'css/sharemxh-style.css', __FILE__ ), array(), '1.0');
}
add_action( 'wp_enqueue_scripts', 'Share_mxh_addcss_head' );
// khoi tao bang cai dat
$sharemxh_options = get_option('sharemxh_settings');
// dua muc luc vao content
include( plugin_dir_path( __FILE__ ) . 'inc/sharemxh-content.php');
// trinh quan ly admin
include( plugin_dir_path( __FILE__ ) . 'inc/sharemxh-admin-page.php');
// the ngon ngu
function share_mxh_load_textdomain() {
  load_plugin_textdomain( 'share-mxh', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'share_mxh_load_textdomain' );
