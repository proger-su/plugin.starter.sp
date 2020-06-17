<?php
/*
  Plugin Name: Plugin Starter Sp
  Description: Starter Plugin
  Author: Sergey P.
  Author URI: http://proger.su
  Version: 1.0
 */

defined( 'ABSPATH' ) or die( 'No direct access' );

class pluginStarterSp {

	function __construct() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'enqueue_scripts' ) );
	}

	static function enqueue_scripts() {
		wp_enqueue_style( 'plugin-starter-sp', plugin_dir_url( __FILE__ ) . 'static/css/styles.css', array(), filemtime( plugin_dir_path(__FILE__) . 'static/css/styles.css' ) );
		wp_enqueue_script( 'plugin-starter-sp', plugin_dir_url( __FILE__ ) . 'static/js/scripts.js', array( 'jquery' ), filemtime( plugin_dir_path(__FILE__) . 'static/js/scripts.js' ), true );

		wp_localize_script( 'plugin-starter-sp', 'pluginStarterSpConf', array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' )
		) );
	}

}

new pluginStarterSp;
