<?php
	include 'config/site-config.php';
	try {
		// Connect to database using PDO
		$conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, $DB_ENCODING);
		// Set debug mode
		//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT ); 
    	//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING ); 
    	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e) {
		die('Error occured!');
		// $e->getMessage();
		file_put_contents('log.txt', $e->getMessage().'\r\n', FILE_APPEND);
	}
?>
