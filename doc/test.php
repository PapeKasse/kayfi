<?php
/**
 * Created by PhpStorm.
 * User: ygoti
 * Date: 14/06/2021
 * Time: 12:25
 */
require_once 'tcpdf/tcpdf.php';

$pdf= new TCPDF('P','mm','A4');



$pdf->AddPage();

$pdf->Output();