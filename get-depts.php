<?php
include ("lib/database.php");
$school = $_GET["school"];

echo '<select name="depts">';
echo '<option value="NA">Please Select A Department</option>';
$sql = "SELECT * FROM depts where SCHOOL_CODE ='".$school."'";

$result = $conn->query($sql);	
// output data of each row
// 
while($row = $result->fetch_assoc()) {		
	?>
	<option class ="dept" value="<?php echo $row['SORCMJR_DEPT_CODE']; ?>"><?php echo $row['STVDEPT_DESC']; ?></option>
<?php
}	

$conn->close();

echo '</select>';
?>