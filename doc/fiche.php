<?php
/*indique au document de ne pas afficher ce qui suit*/
	ob_start();
	@session_start();
	
?>
	<style type="text/css">
	
		.forBorder {
			border: 2px solid #dc0405;
			padding: 10px 10px; 
			border-radius: 10px;
			
		}
		table{
			/*Pour aligner les infos du client et de l entreprise*/
			vertical-align: top;
			width: 100%;
			
		}
		#l75{
			width: 65%;
			/*background-color: red;*/
		}
		#l25{
			width: 30%;
			/*background-color: blue;*/
		}
		#dateDev{
			text-align: right;
			vertical-align: middle;
			width: 100%;
		}
		h1{
			padding:0;
		}
		.contentFact{
			border-collapse: collapse;
		}
		.contentFact2{
			border-collapse: collapse;
		}
		.contentFact td{
			border:1px solid #000;
			padding: 1mm 1mm;
		}
		.contentFact th{
			color: #000;
			font-weight: normal;
			border: 1px solid #000;
			padding: 0.4mm;
		}
		.contentFact2 td{
			border-bottom:1px solid #000;
			padding: 3mm 1mm;
		}
		.contentFact2 th{
			color: #000;
			font-weight: normal;
			padding: 0.4mm;
		}
		.nobord{
			border:none;
		}
		.total{
			padding: 3mm;
			background:rgb(120, 120, 120);
			color: #FFF;
		}
		#foot{
			margin-top: 0px;
			text-align: center;
			border-top: 2px solid #000;
		}
		.rouge{
			background-color: #f3b6b7;
		}
		.input{
			border-radius: 7px; 
			text-align: center; 
			display: inline-block; 
			border: 1px solid #000; 
			padding: 5px;
		}
	</style>
	<?php
	function taker($idpointvente){
		$idpointvente = $idpointvente;
		ini_set('display_errors', 1);
		/*require_once("../php/classe/classeConnexion.php");
        $requete = Connexion::Connect()->query("SELECT * FROM vpointdevente WHERE idpointvente = \"$idpointvente\" ");
        foreach ($requete as $value) {*/
            
	?>
	<!-- On cree le contenu de la page-->
	<!-- 
		*backtop: marge du haut
		*backleft: marge de gauche
		*backright: marge de droite
		*backbottom: marge du bas
		*footer="page": genere les numero de pages
	 -->

	<!-- Pour definir l'oriantaion de la page :  orientation="landscape" -->
	<page  backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm">
		<!-- Message du bas de pagePosition recommandee par le site officiel -->
	
    
		<table style="font-size: 5px; margin:0px; padding:0px;">
			<tr>
				<td style="width: 25%;">
					<table>
						<tr>
							<td style="text-align: center; font-weight: bold; background-color: #ccc;">
								SERTEM GROUPE SASU
								<br>
								CDC
							</td>
						</tr>
						
					</table>
				</td>
				<td style="width: 75%;">
					<table>
						<tr>
							<td style="width: 45%;"></td>
							<td style="width: 30%;"><strong>PERIODE : DU</strong></td>
							<td style="width: 10%; background-color: #66ff66; text-align: center;"><strong>12/05/2020</strong></td>
							<td style="width: 5%; text-align: center;"><strong>AU</strong></td>
							<td style="width: 10%; background-color: #66ff66; text-align: center;"><strong>30/05/2020</strong></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<hr style="height: 10px;">

		<table style="font-size: 10px;">
			<tr style="">
				<td style="background-color: #ccc;">
					<table style="text-align: center; font-weight: bold; width: 100%;">
						<tr>
							<td style="width: 50%; text-align: center;">
								<strong>ETAT PAIEMENT DES JOURNALIERS</strong>
							</td>
							<td style="width: 30%; text-align: center;">
								<strong>CDC</strong>
							</td>
							<td style="width: 8%; text-align: center;">
								<strong>DATE PAIE : </strong>
							</td>
							<td style="width: 12%; text-align: center;">
								<strong>01/09/2020 </strong>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table style="font-size: 10px;">
			<tr style="">
				<td>
					<table class="bordered" style="text-align: center; font-weight: bold; width: 100%;">
						<tr>
							<td>N&deg;</td>
							<td>PRENOMS & NOM</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
			
	</page>
<?php //} ?>
<?php
/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML justification
 * @author Nicola Asuni
 * @since 2008-10-18
 */
require_once('tcpdf/tcpdf.php');

class MYPDF extends TCPDF {

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------

// add a page
// $pdf->SetPrintHeader(false);
$pdf->setHeaderData('',0,'','',array(0,0,0), array(255,255,255) );  
$pdf->AddPage();

// set font
// $pdf->SetFont('helvetica', 'B', 20);
// $pdf->SetFont('helvetica', 'B', 20);

// $pdf->AddFont('times', '');  // Pour Comic Sans MS
// $pdf->AddFont('verdana', ''); 
// output the HTML content

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

$contenu = ob_get_clean();
$pdf->setDisplayMode("fullpage");
$pdf->writeHTML($contenu, true, 0, true, true);
// $pdf->Output($chemin.'example_039.pdf', 'I');
// $pdf->Output($chemin.'example_0.pdf', 'F');
@unlink("Fiche_".$idpointvente.".pdf");
$pdf->Output("Fiche_".$idpointvente.".pdf", 'I');
// $pdf->Output("Fiche_".$idpointvente.".pdf", 'F');

	return 1;
}

echo taker(1);
?>
