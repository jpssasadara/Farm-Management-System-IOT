<?php
$Load_Num=$_GET["Load_Num"];
$Load_Date=$_GET["Load_Date"];
$Amount=$_GET["Amount"];
$Total=$_GET["Total"];
$Name=$_GET["Name"];
$Code=$_GET["Code"];

//################### Create pdf ##################
 require("get_pdf/fpdf.php");       
 $pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,"########################################################## ",0,1,'C');
$pdf->Cell(0,5,"####################   Labuduwa Farm  ###################### ",0,1,'C');
$pdf->Cell(0,5,"########################################################## ",0,1,'C');
$pdf->Cell(0,10,"",0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,"Invoice No : 00",0,0);
$pdf->Cell(10,10,$Load_Num,0,0);
$pdf->Cell(90,10,"",0,0);
$pdf->Cell(30,10,"Date :",0,0);
$pdf->Cell(10,10,date("Y/m/d"),0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(30,10,"Loading Date : ",0,0);
$pdf->Cell(30,10,$Load_Date,0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(90,10,"",0,1);
$pdf->Cell(40,10,"Item code",1,0,'C');
$pdf->Cell(60,10,"Item Name",1,0,'C');
$pdf->Cell(40,10,"Quentity",1,0,'C');
$pdf->Cell(40,10,"Total",1,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(40,20,$Code,1,0,'C');
$pdf->Cell(60,20,$Name,1,0,'C');
$pdf->Cell(40,20,$Amount,1,0,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,40,'Rs: '.$Total.".00/=",1,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10," ",0,1,'C');
$pdf->Cell(0,5," ",0,1,'C');
$pdf->Cell(0,5,".............................  ",0,1,'R');
$pdf->Cell(0,5,"Signature       ",0,1,'R');
$pdf->Cell(0,5,"Tel - 0702818565",0,1);
$pdf->Cell(0,5,"Labuduwa Farm,",0,1);
$pdf->Cell(0,5,"Labuduwa,",0,1);
$pdf->Cell(0,5,"Galle.",0,1);

$pdf->Cell(0,5,"################################################################################# ",0,1,'C');
$pdf->Cell(0,5,"################################################################################# ",0,1,'C');

$pdf->Output();    



/*
 date("Y/m/d")
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,"Name :",1,1,'C');
$pdf->Cell(19.75, 6, $Load_Num, 1, 0, 'C');
$pdf->Cell(19.75, 6, 'ETA', 1, 0, 'C');
$pdf->Cell(19.75, 6, 'Block', 1, 0, 'C');
$pdf->SetFont('Arial','B',7);
$pdf->Cell(19.75, 6, 'Waiting', 1, 1, 'C');
$pdf->Cell(190, 6, 'Waiting', 1, 1, 'C');
//$pdf->Cell(40,10,'Hello World!');
*/
?>

