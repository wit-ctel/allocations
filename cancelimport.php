<?php 	
	include ("lib/database.php");

	$moduleID = $_GET['moduleid'];

	$sql = "UPDATE modulelist SET importflag='0' WHERE UID=". $moduleID;

	$result = $conn->query($sql);
	echo "1";		
		
	$conn->close();
?>