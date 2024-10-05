<?php
/*
Plugin Name: Plugin Boilerplate
Description: Created for Buildup Bookings
Version: 1.0.0
Author: Braudy Pedrosa
Author URI: https://buildupbookings.com//
License: GPL-2.0+
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define constants
define( 'PLUGIN_BOILERPLATE_VERSION', '1.0.0' );
define( 'PLUGIN_BOILERPLATE_SLUG', 'plugin-boilerplate' );
define( 'PLUGIN_BOILERPLATE_NAME', 'plugin_boilerplate' );

// Include required files
require_once plugin_dir_path( __FILE__ ) . 'inc/class-plugin-boilerplate.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/class-plugin-boilerplate-activator.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/class-plugin-boilerplate-deactivator.php';

// Initialize the plugin
function run_plugin_boilerplate() {
    $plugin = new Plugin_Boilerplate();
    $plugin->run();
}

// Register activation and deactivation hooks
register_activation_hook( __FILE__, array( 'PLUGIN_BOILERPLATE_Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'PLUGIN_BOILERPLATE_Deactivator', 'deactivate' ) );


add_action( 'plugins_loaded', 'run_plugin_boilerplate' );

