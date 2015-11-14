<?php
include("conn/file.php");
mysqli_select_db($file, $database_file);
$query_code = sprintf("SELECT COUNT(*) AS count FROM temuduga WHERE no_kp='$_POST[nokp]'");
$code = mysqli_query($file, $query_code) or die(mysqli_error());
$row_code = mysqli_fetch_assoc($code);
echo $row_code['count'];
?>
