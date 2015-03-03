<?php
require ('C:\wamp\www\fpdf\fpdf.php');
$host      = "localhost";
$user      = "root";
$pass      = "";
$db        = "Academia";
$usertable = "materiasimpartidas";

// Create fpdf object
$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->SetMargins(20,18);
// Add a new page to the document
$pdf->addPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,'alumnos del sistema de ingles',0,10,'C');
// Try to connect to DB
$r = mysql_connect("localhost", "root", "");
if (!$r) {
    echo "Could not connect to server\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Connection established\n";
}

// Try to select the database
$r2 = mysql_select_db($db);
if (!$r2) {
    echo "Cannot select database\n";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Database selected\n";
}

// Try to execute the query
$query = "SELECT * FROM DatosEscolares";
$rs    = mysql_query($query);
if (!$rs) {
    echo "Could not execute query: $query";
    trigger_error(mysql_error(), E_USER_ERROR);
} else {
    echo "Query: $query executed\n";
}

while ($row = mysql_fetch_assoc($rs)) {
    // Get the image from each row
    $pdf->Cell(22,5, $row["matricula"],1,0,'C');
	$pdf->Cell(22,5, $row["grado"],1,0,'C');
	$pdf->Cell(22,5, $row["incidencias"],1,0,'C');
	$pdf->Cell(22,5, $row["promedio"],1,0,'C');
	$pdf->Cell(22,5, $row["creditos"],1,0,'C');
	$pdf->Cell(22,5, $row["actExtraCurry"],1,1,'C');
}

// Close the db connection
mysql_close();

// Close the document and save to the filesystem with the name images.pdf
$pdf->Output('images1.pdf', 'F');

?>