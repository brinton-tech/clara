<?php
include("config.php");
$id = $_GET['id'];

// view code//
$sql = "SELECT * FROM users where id='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
	{
	  $img=$row["uimage"];
	}
@unlink('users/'.$img);

//end view code
$msg="";
$sql = "DELETE FROM users WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>User Deleted</p>";
	header("Location:userlist.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>User not Deleted</p>";
		header("Location:userlist.php?msg=$msg");
}

mysqli_close($conn);
?>
