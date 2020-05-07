<?php

namespace PluginName\Admin;

// If this file is called directly, abort.
if (!defined('ABSPATH')) exit;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    PluginName
 * @subpackage PluginName/Admin
 * @author     Your Name <email@example.com>
 */
class Admin
{
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $pluginSlug    The ID of this plugin.
	 */
	private $pluginSlug;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $pluginSlug       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($pluginSlug, $version)
	{
		$this->pluginSlug = $pluginSlug;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 * @param   String  $hook    A screen id to filter the current admin page
	 */
	public function enqueueStyles($hook)
	{
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * You can use the $hook parameter to filter for a particular page,
		 * for more information see the codex,
		 * https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
		 *
		 * If you are unsure what the $hook name of the current admin page of which you want to conditionally load your script is, add this to your page:
		 *	$screen = get_current_screen(); 
		 *	print_r($screen);
		 */

		wp_enqueue_style($this->pluginSlug, plugin_dir_url(__FILE__) . 'css/plugin-name-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 * @param   String  $hook    A screen id to filter the current admin page
	 */
	public function enqueueScripts($hook)
	{
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * You can use the $hook parameter to filter for a particular page,
		 * for more information see the codex,
		 * https://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
		 *
		 * If you are unsure what the $hook name of the current admin page of which you want to conditionally load your script is, add this to your page:
		 *	$screen = get_current_screen(); 
		 *	print_r($screen);
		 */

		wp_enqueue_script($this->pluginSlug, plugin_dir_url(__FILE__) . 'js/plugin-name-admin.js', array('jquery'), $this->version, false);
	}

}
