<?php
	/*
	Plugin Name: Circular Countdown (shared on wplocker.com)
	Plugin URI: http://www.codegrape.com/item/circular-countdown-jquery-plugin/2038
	Description: jQuery framework used countdown-countup timer.
	Author: flashblue
	Version: 1.0.0
	Author URI: http://www.codegrape.com/user/flashblue
	*/
	
	$currentFile = __FILE__;
	$currentFolder = dirname($currentFile);
	
	defined("CIRCULARCOUNTDOWN_FILE") ? NULL : define("CIRCULARCOUNTDOWN_FILE", $currentFile);
	define("CIRCULARCOUNTDOWN_TEXTDOMAIN", "circularcountdown");
	
	//Include global Class
	require_once $currentFolder.'/includes/circularcountdown_globals.class.php';
	
	//Load language
	load_plugin_textdomain("circularcountdown", false, $currentFolder.'/languages/');


	/**********************
	   - Installation -
	**********************/
	
	//Install
	function circularCountdownInstall() {
		require_once(dirname(__FILE__).'/includes/circularcountdown_params.class.php');
	}
	
	register_activation_hook($currentFile, "circularCountdownInstall");
	
	//Uninstall
	function circularCountdownUninstall() {
		require_once(dirname(__FILE__).'/uninstall.php');
	}
	
	register_uninstall_hook($currentFile, "circularCountdownUninstall");
	
	/*********************
		- Admin menu -
	*********************/
	
	//Register admin menu
	function registerCircularCountdownAdminMenu() {
		//Add menu
		$page = 'circularcountdown/circularcountdown_admin.php';
		add_menu_page('Circular Countdown', 'Circular Count', 'add_users', $page, '', plugins_url("images/icon.png", __FILE__));	
		
		//Load CSS
		wp_enqueue_style('circularcountdown-admin', plugins_url('css/admin.css', __FILE__));
		wp_enqueue_style('circularcountdown-colorpicker', plugins_url('js/colorpicker/css/colorpicker.css', __FILE__));
		wp_enqueue_style('circularcountdown-jqueryui', plugins_url('css/ui-lightness/jquery-ui-1.10.2.custom.min.css', __FILE__));
		
		//Add fontello
		wp_enqueue_style('circularcountdown-fontello', plugins_url('css/fontello.css', __FILE__));
		
		//Load JS
		wp_enqueue_script('circularcountdown-admin', plugins_url('js/admin.js', __FILE__), array("jquery", "jquery-ui-datepicker"));
		wp_enqueue_script('circularcountdown-admin-colorpicker', plugins_url('js/colorpicker/js/colorpicker.js', __FILE__), array("jquery"));
		wp_enqueue_script('circularcountdown-admin-iphone-style-checkboxes', plugins_url('js/jquery.iphone-style-checkboxes.js', __FILE__), array("jquery"));
	}
	
	add_action('admin_menu', 'registerCircularCountdownAdminMenu');
	
	/********************
		- Front End -
	********************/
	
	//[circularcountdown] shortcode - displays front end
	function circularCountdownCheckForShortcode() {
		CircularCountdownGlobals::enqueueScripts();
	}
	
	if (!is_admin()) {
		add_action('wp', 'circularCountdownCheckForShortcode');
	}
	
	function circularCountdownDisplay($args) {
		$uniqueId = CircularCountdownGlobals::uniqueId();
		$options = CircularCountdownGlobals::getOptions();
		
		//Shortcode arguments overwrite admin options
		if (isset($args) && is_array($args)) {			
			foreach ($args as $key => $value) {				
				$options[$key] = $value;
			}
		}
		
		ob_start();
		
		require dirname(__FILE__) . '/circularcountdown_front.php';
				
		return ob_get_clean();
	}
	
	add_shortcode("circularcountdown", "circularCountdownDisplay");
	
	
	
	