<?php
/**
 * @package rss-per-page
 * @version 1.6
 */
/*
Plugin Name: rss-per-page
Plugin URI: http://plugins.funsite.eu/rss-per-page/
Description: Adds a field to pages and implements a widget to show a RSS depending on that field.
Author: Gerhard Hoogterp
Version: 1.6
Author URI: http://plugins.funsite.eu/rss-per-page/
*/
if ( ! defined( 'ABSPATH' ) ) exit;

if (!class_exists('basic_plugin_class')):
	require(plugin_dir_path(__FILE__).'basics/basic_plugin.class');
endif;

include_once('rss-per-page-plugin.php');
$rss__per_page = new rss_per_page_class();
$rss__per_page->currentPlugin = __FILE__; // bit of a hack to find the plugin info in getPlugins

?>