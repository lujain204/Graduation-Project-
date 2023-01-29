<?php
session_start();
?>

<?php
$username="root";
$database="lostfounddb";
$server="localhost";
$conn=mysqli_connect($server,$username,"",$database);

//SQL to get 10 records
$sql="select * FROM item  GROUP BY UserID Having count(UserID)>1 and ReportType=0 and approved=1 ";
require('C:\xampp\htdocs\fpdf\fpdf.php');
$pdf = new FPDF('P','mm','A3'); 
$pdf->AddPage();

$width_cell=array(30,30,100,30,30,30);
$pdf->SetFont('Arial','B',12);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
//$pdf->Cell($width_cell[0],10,'ItemID',1,0,'C',true);
/*//Second header column//
$pdf->Cell($width_cell[1],10,'ItemName',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Description',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Date',1,0,'C',true);
//Five header column// */
$pdf->Cell($width_cell[0],10,'UserID',1,1,'C',true);// convert 0 to 1 and number of cell to 0
// six 5
//$pdf->Cell($width_cell[5],10,'CategoryID',1,1,'C',true);
//// header ends /////// 

$pdf->SetFont('Arial','',12);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

$width_cell1=array(10);

/// each record is one row  ///
foreach ($conn->query($sql) as $row) {
//$pdf->Cell($width_cell[0],10,$row['ItemID'],1,0,'C',$fill); 
//to give alternate background fill  color to rows//
//$pdf->Cell($width_cell[1],10,$row['ItemName'],1,0,'L',$fill);
//$pdf->Cell($width_cell[2],10,$row['Description'],1,0,'C',$fill);
//$pdf->Cell($width_cell[3],10,$row['Date'],1,0,'C',$fill);
$pdf->Cell($width_cell[0],10,$row['UserID'],1,1,'C',$fill); // convert  number of cell to 0
//$pdf->Cell($width_cell[5],10,$row['CategoryID'],1,1,'C',$fill);
$fill = !$fill;
}
/// end of records /// 

$pdf->Output();
?>