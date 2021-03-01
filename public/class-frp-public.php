<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       magic-bears-studio.com/arthur
 * @since      1.0.0
 *
 * @package    Frp
 * @subpackage Frp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Frp
 * @subpackage Frp/public
 * @author     Arthur <arthur@mbstudio.email>
 */
class Frp_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

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
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/frp-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/frp-public.js', array( 'jquery' ), $this->version, false);
        wp_enqueue_script('example-app', plugin_dir_url(__FILE__) . 'js/frp-index.js', array( 'wp-element' ), time(), true);
    }

    /**
     * Create Shortcode for Users to add the button.
     *
     * @since    1.0.0
     */
    public function register_react_shortcode()
    {
        ob_start(); ?>
        <div id="app">App goes here</div>
    <?php
    return ob_get_clean();
    }
}
