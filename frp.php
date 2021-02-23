<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              magic-bears-studio.com/arthur
 * @since             1.0.0
 * @package           Frp
 *
 * @wordpress-plugin
 * Plugin Name:       first-reat-plugin
 * Plugin URI:        magic-bears-studio.com/frp
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.1
 * Author:            Arthur
 * Author URI:        magic-bears-studio.com/arthur
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       frp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('FRP_VERSION', '0.0.1');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-frp-activator.php
 */
function activate_frp()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-frp-activator.php';
    Frp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-frp-deactivator.php
 */
function deactivate_frp()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-frp-deactivator.php';
    Frp_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_frp');
register_deactivation_hook(__FILE__, 'deactivate_frp');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-frp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_frp()
{
    $plugin = new Frp();
    $plugin->run();
}
run_frp();
