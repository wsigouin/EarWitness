<?php
session_start();
$_SESSION["downloadedConsent"] = 1;
/**
 * Created by PhpStorm.
 * User: William
 * Date: 2017-03-29
 * Time: 1:36 PM
 */
require('../fpdf/fpdf.php');
require('../fpdi/fpdi.php');



$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('../PDFs/ConsentForm.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);

$pdf->useTemplate($tplIdx);

$pdf->Output('D', "consent.pdf");