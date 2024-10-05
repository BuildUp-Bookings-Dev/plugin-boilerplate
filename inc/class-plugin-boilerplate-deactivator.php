<?php

class PLUGIN_BOILERPLATE_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option( PLUGIN_BOILERPLATE_NAME . '_plugin_settings', $plugin_settings );
    	delete_option( PLUGIN_BOILERPLATE_NAME . '_first_run', true );
	}

}