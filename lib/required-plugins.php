<?php


// include ACF if it's not installed 
if( !class_exists('ACF') ) {
    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'library/plugins/advanced-custom-fields/acf.php';
}

add_filter('acf/settings/save_json', PLUGIN_BOILERPLATE_NAME . '_json_save_point');
function plugin_boilerplate_json_save_point( $path ) {
    $path = plugin_dir_path( dirname( __FILE__ ) ) . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', PLUGIN_BOILERPLATE_NAME . '_json_load_point');
function plugin_boilerplate_json_load_point( $paths ) {        
    unset($paths[0]);
    $paths[] = plugin_dir_path( dirname( __FILE__ ) ) . '/acf-json';
    return $paths;
}
    