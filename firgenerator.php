<?php
    //call the FPDF library
    require('fpdf17/fpdf.php');

    //A4 width : 219mm
    //default margin : 10mm each side
    //writable horizontal : 219-(10*2)=189mm

    //create pdf object
    $pdf = new FPDF('P','mm','A4');

    //add new page
    $pdf->AddPage();
    //output the result


    $pdf->SetFont('Arial','BU',20);

    //Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])

    $pdf->Cell(190,40,'First Investigation Report',1,1,'C');

    $pdf->SetFont('Arial','',10);
    $pdf->Cell(170,10,'No: 133',1,1,'R');

    $pdf->Cell(50,20,'Name:',1,1,'R');
    $pdf->Cell(50,20,'Age:',1,1,'R');
    $pdf->Cell(50,20,'Address:',1,1,'R');


    $pdf->Output();
?>
