<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM property WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Property Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Property Not Deleted</p>";
	header("Location:propertyview.php?msg=$msg");
}
mysqli_close($conn);
?>