<?php
 $conn=mysqli_connect('localhost','root','','lostfounddb');
 error_reporting(0);

if (isset($_GET['deletid'])) {
	$id=$_GET['deletid'];
	$sql="delete from item where ItemID='$id'";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header('Location: lostList.php');
	}

	}
?>