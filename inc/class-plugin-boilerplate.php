<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Plugin_Boilerplate {
    
    public function __construct() {
        
    }

    public function run() {

        $this->load_dependencies();

    }

    public function load_dependencies() {
        // Other includes
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/required-plugins.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/helpers.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/enqueue.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/settings.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/post-types.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/custom-menu.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/hooks.php';
    
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/shortcodes.php';
    }

}
