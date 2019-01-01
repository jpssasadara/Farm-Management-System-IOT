<?php
//################### Create pdf ##################
 require("get_pdf/fpdf.php");       
 $pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,"Name :",1,1,'C');
$pdf->Cell(19.75, 6, 'ETD', 1, 0, 'C');
$pdf->Cell(19.75, 6, 'ETA', 1, 0, 'C');
$pdf->Cell(19.75, 6, 'Block', 1, 0, 'C');
$pdf->Cell(19.75, 6, 'Waiting', 1, 1, 'C');
$pdf->Cell(190, 6, 'Waiting', 1, 1, 'C');
//$pdf->Cell(40,10,'Hello World!');
$pdf->Output();    

?>