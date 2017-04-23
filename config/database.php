<?php
	
	$host = "localhost";
	$database = "amadoumt";
	$user = "root";
	$password = "root";
	// Database credentials
	try {
		$db = new PDO("mysql:host=".$host.";dbname=".$database, $user, $password);

		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION  );
		
	}

	catch(PDOException $e) {
		die('Erreur: '. $e->getMessage());
	}