<?php

add_action('wp_enqueue_scripts', PLUGIN_BOILERPLATE_NAME . '_enqueue_public_styles_scripts');
add_action('admin_enqueue_scripts', PLUGIN_BOILERPLATE_NAME . '_enqueue_admin_styles_scripts');

global $version;
$version = PLUGIN_BOILERPLATE_VERSION . '.' . time() . '.' . uniqid();



function plugin_boilerplate_enqueue_public_styles_scripts() {
    plugin_boilerplate_external_public_styles_scripts();
    plugin_boilerplate_public_styles_scripts();
}

function plugin_boilerplate_enqueue_admin_styles_scripts() {
    $screen = get_current_screen();
    
    if ($screen->id === 'mapbox-location_page_locations-settings') {
        plugin_boilerplate_external_admin_styles_scripts();
        plugin_boilerplate_admin_styles_scripts();
    }
}

function plugin_boilerplate_public_styles_scripts() {
    global $version;
   
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-public-style', plugin_dir_url(dirname(__FILE__)) . 'dist/css/public/bundled-main.css', [], $version, 'all');
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-public-script', plugin_dir_url(dirname(__FILE__)) . 'dist/js/public/bundled-main.js', ['jquery'], $version, true);

    wp_localize_script(PLUGIN_BOILERPLATE_NAME . '-public-script', PLUGIN_BOILERPLATE_NAME  . '_ajax',  
        array(
            'plugin_settings' => plugin_boilerplate_settings(),
            'directory_uri' => plugin_dir_url(dirname(__FILE__)),
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce(PLUGIN_BOILERPLATE_NAME . '_nonce')
        )
    );
}

function plugin_boilerplate_external_public_styles_scripts() {
    global $version;
    
}

function plugin_boilerplate_admin_styles_scripts() {
    global $version;
    
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-admin-style', plugin_dir_url(dirname(__FILE__)) . 'dist/css/admin/bundled-main.css', [], $version, 'all');
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-admin-script', plugin_dir_url(dirname(__FILE__)) . 'dist/js/admin/bundled-main.js', ['jquery'], $version, true);

}

function plugin_boilerplate_external_admin_styles_scripts() {
    global $version;
    // Bootstrap
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-bootstrap', plugin_dir_url(dirname(__FILE__)) . 'node_modules/bootstrap/dist/css/bootstrap.min.css', [], $version, 'all');
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-bootstrap', plugin_dir_url(dirname(__FILE__)) . 'node_modules/bootstrap/dist/js/bootstrap.min.js', [], $version, true);
}
