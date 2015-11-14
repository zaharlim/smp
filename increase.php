<?php
include("conn/file.php");
mysqli_select_db($file, $database_file);



$query_code = sprintf("SELECT edit_time FROM temuduga");
$code = mysqli_query($file, $query_code) or die(mysqli_error());
$row_code = mysqli_fetch_assoc($code);
if(isset($_POST['edittime']) && $row_code['edit_time'] <= 2) {
	$newEdit = $row_code['edit_time'] + 1;
	mysqli_query($file, "UPDATE temuduga SET edit_time=$newEdit WHERE id=1");
}
else if(isset($_POST['edittime']))
	echo "Edit is not allowed!!!";

?>
<form method="post">
	<input name="edittime" value="<?php echo $row_code['edit_time'] ?>">
	<input type="submit" value="Edit">
</form>
