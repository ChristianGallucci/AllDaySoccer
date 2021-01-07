<?php


	$conn = new mysqli('localhost', 'root', '', 'soccer');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>