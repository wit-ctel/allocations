<?php 
$servername = "localhost";
	$username = "allocations_user";
	$password = "VTrNp7A5P";
	$dbname = "allocations";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>