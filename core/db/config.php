<?php

// Global variable with main DB parameters for connection
$db_config_params = array(
	
	// Put here another connection params, like:
	/*
	
	// Name of db connection config
	'connect_name' => array(
	
		// Driver using for this connection ('pdo' or 'mysqli')
		'driver' => 'pdo',
		
		// Connection params for this connection
		'params' => array(
			'host'			=>	'hostname',
			'db_name'		=>	'db_name',
			'user'			=>	'db_user',
			'pass'			=>	'password',
			'persistant'	=>	true	// Persistant connection
		)
	)
	
	*/
	
	// Name of db connection config
	'wd' => array(
	
		// Driver using for this connection
		'driver' => 'pdo',
		
		// Connection params for this connection
		'params' => array(
			'host'			=>	'localhost',
			'db_name'		=>	'window_site',
			'user'			=>	'tmuser',
			'pass'			=>	'SbuBtKlUXtncBeyD',
			'charset'		=>	'utf8',
			'persistant'	=>	true
		)
	)
);

//
?>