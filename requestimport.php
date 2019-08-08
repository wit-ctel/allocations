<?php 	
	include ("lib/database.php");

	$moduleID = $_GET['moduleid'];

	$select = "SELECT importcomplete from modulelist where UID=". $moduleID; 

	//echo $select;

	$result = $conn->query($select);
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	$row = mysqli_fetch_row($result);
	$importcomplete = ($row[0]);

	if(importcomplete == 1){
		echo "importcomplete";
	}
	else{
		$sql = "UPDATE modulelist SET importflag='1' WHERE UID=". $moduleID;
		$result = $conn->query($sql);
		print($result);
	}


	//$sql = "UPDATE modulelist SET importflat='1' WHERE UID=". $moduleID;

	//$result = $conn->query($sql);
	//echo $sql;		
		
	$conn->close();
?>