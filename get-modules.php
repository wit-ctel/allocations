<?php
	include ("lib/database.php");
?>
<tr>
   <!--When a header is clicked, run the sortTable function, with a parameter, 0 for sorting by names, 1 for sorting by country:-->  
    <th>Module Title</th>
    <th>CRN</th>
    <th>Year</th>
    <th>Programme Code</th>
    <th>Subject Code</th>
    <th>Request Access</th>
 </tr>

<?php

	$sql = "SELECT * from modules WHERE ";

	$whereClause = array();
	if(isset($_GET["title"])) {
	    $title = $_GET["title"];
	    $whereClause[] = "SUBJECT_TITLE LIKE '%".mysqli_real_escape_string($conn, $_GET['title'])."%'";
	}
	if(isset($_GET["year"])) {
	     $year = $_GET["year"];
	     $whereClause[] = "STAGE = '".mysqli_real_escape_string($conn, $_GET['year'])."'";
	}
	if(isset($_GET["dept"])) {
	    $whereClause[] = "SORCMJR_DEPT_CODE = '".mysqli_real_escape_string($conn, $_GET['dept'])."'";
	}
	if(isset($_GET["prog"])) {
	    $whereClause[] = "SMRPRLE_PROGRAM = '".mysqli_real_escape_string($conn, $_GET['prog'])."'";
	}

	if ( sizeof($whereClause) > 1 ) {
	    $sql .= implode(' AND ', $whereClause);   
	}

	else{
		$sql .= $whereClause[0];
	}
	echo $sql;
	$result = $conn->query($sql);	
	// output data of each row
	while($row = $result->fetch_assoc()) {		
?>
		<tr>
		    <td><?php echo $row['SUBJECT_TITLE']; ?></td>
		    <td><?php echo $row['CRN']; ?></td>
		    <td><?php echo $row['STAGE']; ?></td>
		    <td><?php echo $row['SMRPRLE_PROGRAM']; ?></td>
		    <td><?php echo $row['SUBJECT_CODE']; ?></td>
		    <td><button type="button" class="add-me btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-title="<?php echo $row['SUBJECT_TITLE']; ?>" data-crn="<?php echo $row['CRN']; ?>" data-prog="<?php echo $row['SMRPRLE_PROGRAM']; ?>">Add Me</button></td>
		</tr>
		
<?php										
	}			
	$conn->close();
?>
