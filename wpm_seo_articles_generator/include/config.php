<?php

/**
 * Register Admin Menu
 */
$admin_menu = [
	[
		'title' => 'SEO Articles Generator',
		'name' => 'Articles Generator',
		'slug_url' => 'settings',
		'template' => 'settings/settings.php'
	], // Main menu
];

$generator_languages = ["English (US)","English (UK)","French","Spanish","German","Italian","Dutch","Portuguese","Portuguese (BR)","Swedish","Norwegian","Danish","Finnish","Romanian","Czech","Slovak","Slovenian","Hungarian","Croatian","Polish","Greek","Turkish","Russian","Hindi","Thai","Japanese","Chinese (Simplified)","Korean","Indonesian"];

/**
 * Frontend Scripts and Styles
 */
$register_frontend_styles = [
	[
		'name' => 'font-awesome',
		'url' => 'libs/font-awesome/all.min.css'
	],
	[
		'name' => 'frontend',
		'url' => 'assets/css/frontend.css'
	] // Main Style
];
$register_frontend_scripts = [
	[
		'name' => 'font-awesome',
		'url' => 'libs/font-awesome/all.min.js'
	],
	[
		'name' => 'frontend',
		'url' => 'assets/js/frontend.js'
	] // Main Script
];

/**
 * Admin Scripts and Styles
 */
$register_admin_styles = [
	[
		'name' => 'font-awesome',
		'url' => 'libs/font-awesome/all.min.css'
	],
	[
		'name' => 'admin',
		'url' => 'assets/css/admin.css'
	] // Main Style
];
$register_admin_scripts = [
	[
		'name' => 'font-awesome',
		'url' => 'libs/font-awesome/all.min.js'
	],
	[
		'name' => 'admin',
		'url' => 'assets/js/admin.js'
	] // Main Script
];