<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	'integration' 	=> TRUE,

	'engine' => array
	(
		"trace_callback" =>      NULL,             /* Callback function for engine trace messages (optional) */
		"quiet" =>               TRUE,             /* Suppresses E_NOTICE and E_WARNING error messages */
		"file_mode" =>           0777,
		"dir_mode" =>            0777,
		"plugins" =>             array('system'),
		"bracket_open" =>        '{',
		"bracket_close" =>       '}',
		"bracket_comment" =>     NULL,
		"bracket_end_comment" => NULL,
		"bracket_ignore" =>      NULL,
		"bracket_end_ignore" =>  NULL,
	),
	
	'configs' => array
	(		
		// Template views
		'templates'      => 'views',
		
		// Run autocompile always
		'auto_compile'    => TRUE,
		
		// Template suffix
		'template_suffix' =>     '.php',
		
		// Compiled files suffix
		'compiled_suffix' =>     '.php',
		
		// Compiled files path
		'compiled_path' => MODPATH . 'koutline/compiled/',
	),
);