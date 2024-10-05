# Plugin Boilerplate

This is a boilerplate for creating WordPress plugins. It includes basic setup and structure to help you get started with your own plugin development.

## Getting Started

To customize this boilerplate for your own plugin, follow the steps below to change the placeholder names.

### Step 1: Change Plugin Name

1. Open the main plugin file `plugin-boilerplate.php`.
2. Replace the following placeholders with your plugin's information:
   - `Plugin Boilerplate` with your plugin's name.
   - `Created for Buildup Bookings` with your plugin's description.
   - `1.0.0` with your plugin's version.
   - `Braudy Pedrosa` with your name.
   - `https://buildupbookings.com//` with your website URL.

### Step 2: Update Constants

1. In the `plugin-boilerplate.php` file, update the constants:
   - `PLUGIN_BOILERPLATE_VERSION` to match your plugin's version.
   - `PLUGIN_BOILERPLATE_SLUG` to a unique slug for your plugin.
   - `PLUGIN_BOILERPLATE_NAME` to a unique name for your plugin.

### Step 3: Rename Files and Classes

1. Navigate to the `inc` directory.
2. Rename the following files to match your plugin's name:
   - `class-plugin-boilerplate.php`
   - `class-plugin-boilerplate-activator.php`
   - `class-plugin-boilerplate-deactivator.php`
3. Open each file and update the class names:
   - `Plugin_Boilerplate` to your plugin's main class name.
   - `PLUGIN_BOILERPLATE_Activator` to your plugin's activator class name.
   - `PLUGIN_BOILERPLATE_Deactivator` to your plugin's deactivator class name.

### Step 4: Update Hooks

1. In the `plugin-boilerplate.php` file, update the activation and deactivation hooks:
   - Replace `PLUGIN_BOILERPLATE_Activator` with your plugin's activator class name.
   - Replace `PLUGIN_BOILERPLATE_Deactivator` with your plugin's deactivator class name.

### Step 5: Replace Placeholders Throughout the Directory

1. Search for any occurrences of `plugin-boilerplate`, `plugin_boilerplate`, `Plugin_Boilerplate` and `PLUGIN_BOILERPLATE` throughout the entire plugin directory.
2. Replace them with your plugin's unique slug and class name, respectively.

**Tip:** Use a text editor or IDE with a "Find and Replace" feature to quickly update all instances of the placeholder names across multiple files.

### Step 6: Test Your Plugin

1. After making all the changes, test your plugin to ensure it activates and deactivates correctly.
2. Check for any errors or issues in the WordPress admin area.

## License

This plugin is licensed under the GPL-2.0+ license. You are free to modify and distribute it as per the terms of the license.

---

By following these steps, you can successfully customize the boilerplate to create your own WordPress plugin. Happy coding!
