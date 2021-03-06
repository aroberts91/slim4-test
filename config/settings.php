<?php

// Error reporting
error_reporting(0);
ini_set('display_errors', '0');

// Timezone
date_default_timezone_set('Europe/Berlin');

// Settings
$settings = [];

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

//Database settings
// Database settings
$settings['db'] = [
	'driver' => 'mysql',
	'host' => 'localhost',
	'username' => 'root',
	'database' => 'demo',
	'password' => 'password',
	'flags' => [
		// Turn off persistent connections
		PDO::ATTR_PERSISTENT => false,
		// Enable exceptions
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		// Emulate prepared statements
		PDO::ATTR_EMULATE_PREPARES => true,
		// Set default fetch mode to array
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	],
];


// Error Handling Middleware settings
$settings['error_handler_middleware'] = [

	// Should be set to false in production
	'display_error_details' => true,

	// Parameter is passed to the default ErrorHandler
	// View in rendered output by enabling the "displayErrorDetails" setting.
	// For the console and unit tests we also disable it
	'log_errors' => true,

	// Display error details in error log
	'log_error_details' => true,
];

return $settings;
