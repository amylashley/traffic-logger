<?php 

return [
		
		/*
		 |--------------------------------------------------------------------------
		 | Default Database Connection Name
		 |--------------------------------------------------------------------------
		 |
		 | Here you may specify which of the database connections below you wish
		 | to use as your default connection.
		 |
		 */
		
		'db-connection' => env('DB_CONNECTION', 'mysql'),
		
		'table-name' => 'log',
		
		/**
		 * The impersonator value is the key for the session variable which holds
		 * the id of the person performing the impersonation. This will need to be
		 * setup separately in your application.
		 */
		'impersonator' => 'auth_imitator',
		
		'trafficlogger' => 'test', //remove after testing
		
];
