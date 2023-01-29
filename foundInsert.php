<?php
session_start();
?>

<?php
$username="root";
$database="lostfounddb";
$server="localhost";
$conn=mysqli_connect($server,$username,"",$database);
if($conn)
 	{ 
    $itemname=$_POST['fItemName'];
    $description=$_POST['fdescription'];
    $fdate=$_POST['fdate'];
    $reportType=1;
    $userid=$_POST['fuserid']; 
    $category=$_POST['fcategory'];
    $file = $_FILES['image']['name'];
      
    if($category =='accessories'){
        $category=1;}
    elseif ($category=='electronic') {
              $category=2;}        

    if(isset($_POST['save'])) 
      {   $sql="insert into item (ItemName,Description,Date,ReportType,image,UserID,CategoryID,approved) 
                            values ('$itemname','$description','$fdate',$reportType,'$file',$userid,$category,1)";

      
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
     
      }


  // if(isset($_POST['edit'])) 
  //    { $itemid=$_get['updateid'] ;
  //     $sql="update item set ItemName='".$itemname."' ,CategoryID='".$category."',Description='".$description."',Date='".$fdate."//'where ItemID='".$itemid."'" ;
//
  //    
  //      $result=mysqli_query($conn,$sql);
  //      mysqli_close($conn);
  //   
  //    }
//
//

     header("Location:foundList.php");}

    
?>

