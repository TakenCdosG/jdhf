<?php
/**
* Plugin Name: mu-plugins loader
* Description: Loads mu-plugins on subdirectories
* Version: 1.0
* Author: Think Creative Group
* Author URI: https://www.thinkcreativegroup.com/
**/

// Opens the must-use plugins directory
$wpmu_plugin_dir = opendir(WPMU_PLUGIN_DIR);

// Lists all the entries in this directory
while (false !== ($entry = readdir($wpmu_plugin_dir))) {
	$path = WPMU_PLUGIN_DIR . '/' . $entry;
	// Is the current entry a subdirectory?
	if ($entry != '.' && $entry != '..' && is_dir($path)) {
		require($path . '/' . $entry . '.php');
	}
}
closedir($wpmu_plugin_dir);

?>
