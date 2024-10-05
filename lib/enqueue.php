<?php

// Hook to enqueue public styles and scripts
add_action('wp_enqueue_scripts', PLUGIN_BOILERPLATE_NAME . '_enqueue_public_styles_scripts');

// Hook to enqueue admin styles and scripts
add_action('admin_enqueue_scripts', PLUGIN_BOILERPLATE_NAME . '_enqueue_admin_styles_scripts');

// Global version variable for cache busting
global $version;
$version = PLUGIN_BOILERPLATE_VERSION . '.' . time() . '.' . uniqid();

// Function to enqueue public styles and scripts
function plugin_boilerplate_enqueue_public_styles_scripts() {
    plugin_boilerplate_external_public_styles_scripts(); // Enqueue external public styles/scripts
    plugin_boilerplate_public_styles_scripts(); // Enqueue internal public styles/scripts
}

// Function to enqueue admin styles and scripts
function plugin_boilerplate_enqueue_admin_styles_scripts() {
    $screen = get_current_screen(); // Get current admin screen
    
    // Check if the current screen is the settings page
    if ($screen->id === 'toplevel_page_' . PLUGIN_BOILERPLATE_SLUG . '-settings') {
        plugin_boilerplate_external_admin_styles_scripts(); // Enqueue external admin styles/scripts
        plugin_boilerplate_admin_styles_scripts(); // Enqueue internal admin styles/scripts
    }
}

// Function to enqueue internal public styles and scripts
function plugin_boilerplate_public_styles_scripts() {
    global $version;
   
    // Enqueue public CSS
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-public-style', plugin_dir_url(dirname(__FILE__)) . 'dist/css/public/bundled-main.css', [], $version, 'all');
    
    // Enqueue public JS
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-public-script', plugin_dir_url(dirname(__FILE__)) . 'dist/js/public/bundled-main.js', ['jquery'], $version, true);

    // Localize script with data for AJAX
    wp_localize_script(PLUGIN_BOILERPLATE_NAME . '-public-script', PLUGIN_BOILERPLATE_NAME  . '_ajax',  
        array(
            'plugin_settings' => plugin_boilerplate_settings(), // Plugin settings
            'directory_uri' => plugin_dir_url(dirname(__FILE__)), // Directory URI
            'ajax_url' => admin_url('admin-ajax.php'), // AJAX URL
            'nonce' => wp_create_nonce(PLUGIN_BOILERPLATE_NAME . '_nonce') // Security nonce
        )
    );
}

// Function to enqueue external public styles and scripts
function plugin_boilerplate_external_public_styles_scripts() {
    global $version;
    // Add external public styles/scripts here if needed
}

// Function to enqueue internal admin styles and scripts
function plugin_boilerplate_admin_styles_scripts() {
    global $version;
    
    // Enqueue admin CSS
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-admin-style', plugin_dir_url(dirname(__FILE__)) . 'dist/css/admin/bundled-main.css', [], $version, 'all');
    
    // Enqueue admin JS
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-admin-script', plugin_dir_url(dirname(__FILE__)) . 'dist/js/admin/bundled-main.js', ['jquery'], $version, true);
}

// Function to enqueue external admin styles and scripts
function plugin_boilerplate_external_admin_styles_scripts() {
    global $version;
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style(PLUGIN_BOILERPLATE_NAME . '-bootstrap', plugin_dir_url(dirname(__FILE__)) . 'node_modules/bootstrap/dist/css/bootstrap.min.css', [], $version, 'all');
    
    // Enqueue Bootstrap JS
    wp_enqueue_script(PLUGIN_BOILERPLATE_NAME . '-bootstrap', plugin_dir_url(dirname(__FILE__)) . 'node_modules/bootstrap/dist/js/bootstrap.min.js', [], $version, true);
}
