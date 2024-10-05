<?php
add_action('admin_menu', PLUGIN_BOILERPLATE_NAME . '_settings');

function plugin_boilerplate_settings() {
    add_menu_page(
        'Plugin Settings', // Page title
        'Plugin Settings', // Menu title
        'manage_options',  // Capability
        PLUGIN_BOILERPLATE_SLUG . '-settings', // Menu slug
        'render_plugin_boilerplate_settings_page' // Function to display the page
    );
}

function render_plugin_boilerplate_settings_page() {
    // Path to the settings template in your plugin
    $template_path = plugin_dir_path( __DIR__ ) . 'templates/settings/settings.php';

    if ( file_exists( $template_path ) ) {
        include $template_path;
    } else {
        echo '<div class="wrap"><h1>Settings Page</h1><p>Settings template not found.</p></div>';
    }
}

