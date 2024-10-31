<?php
/*
Plugin Name: Nouw CSS
Plugin URI: http://nouw.com/plugins/nouw-css.zip
Description: This plugin allows imported blogs from nouw.com to be shown correctly on wordpress-blogs. The plugin adds CSS for Nouws picture collage feature.
Version: 0.6
Author: Nouw
Author URI: http://nouw.com/
License: GPL2
*/

// Do not allow direct access
if (! defined('WPINC'))
{
	die('Permission denied');
}

// Functions for activation/deactivation etc
function nouw_css_activate()
{

}

function nouw_css_deactivate()
{

}

function nouw_css_uninstall()
{

}

// Init function, for setting additional hooks etc
function nouw_css_init()
{
	$path = plugin_dir_url(__FILE__) . 'nouw_compat_style.css';
	wp_enqueue_style('nouw_compat_style', $path);
}

function nouw_css_run()
{
	// Register init function
	add_action('init', 'nouw_css_init');
}

// Register hooks for installation, uninstallation etc
register_activation_hook(__FILE__, 'nouw_css_activate');
register_deactivation_hook(__FILE__, 'nouw_css_deactivate');
register_uninstall_hook(__FILE__, 'nouw_css_uninstall');

// Run the plugin
nouw_css_run();

