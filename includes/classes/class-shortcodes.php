<?php

/*
* @Author 		pluginbazar
* Copyright: 	2015 pluginbazar
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_woc_shortcodes{
	
    public function __construct(){
		add_shortcode( 'woc_open_close', array( $this, 'woc_display' ) );
		
		add_filter( 'widget_text', 'do_shortcode', 11);
	}
	
	public function woc_display($atts, $content = null ) {

		extract( is_array( $atts ) ? $atts : array() );

		ob_start();
		include( WOC_PLUGIN_DIR . 'templates/display-schedules.php');
		return ob_get_clean();
	}
}new class_woc_shortcodes();