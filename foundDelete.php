<?php
 session_start();
//include("foundList.php");
$username="root";
$database="lostfounddb";
$server="localhost";
$conn=mysqli_connect($server,$username,"",$database);
error_reporting(0);
// delete
if (isset($_GET['deleteid'])){
	$id= $_GET['deleteid'];
	$query="DELETE FROM item WHERE ItemID ='$id'";
  	if( mysqli_query($conn, $query))
  	{
  	    header("Location:foundList.php");
  	}
  	
}





 ?>