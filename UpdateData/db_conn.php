<?php

	//Server Daten	
	//Musst du wieder auf deinen Bedarf anpassen...sollte aber funktionieren mit den Testdaten läufts!!!
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'test';

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	} 
?>