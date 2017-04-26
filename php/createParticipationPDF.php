<?php
session_start();
/**
 * Created by PhpStorm.
 * User: William
 * Date: 2017-03-29
 * Time: 1:36 PM
 */
require('../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->MultiCell(180,10,('This is to acknowledge that '. $_SESSION["name"].
    ' has taken part in a study conducted by Drs. Cheryl Reed-Elder and Paul Dupuis. The average length of participation for this study was approximately 30 minutes or less. '.
    'CODE CONFIRMATION: '. $_SESSION["code"]));
$pdf->Output('D', "participation". $_SESSION["name"].".pdf");
