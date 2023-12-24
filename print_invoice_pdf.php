<?php
require('fpdf/fpdf.php');

$pdf = new FPDF('L', 'mm', 'Legal');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetFillColor(135, 200, 255);
$pdf->Cell(305, 10, 'Laporan Print Invoice Berdasarkan ' . $judul, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(161, 159, 159);

$pdf->Cell(50, 10, 'No Number or Email', 1, 0, 'C', true);
$pdf->Cell(45, 10, 'Booking Date', 1, 0, 'C', true);
$pdf->Cell(35, 10, 'Customer Name', 1, 0, 'C', true);
$pdf->Cell(35, 10, 'Product', 1, 0, 'C', true);
$pdf->Cell(10, 10, 'Qty', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Product', 1, 0, 'C', true);
$pdf->Cell(10, 10, 'Qty', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Product', 1, 0, 'C', true);
$pdf->Cell(10, 10, 'Qty', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Product', 1, 0, 'C', true);
$pdf->Cell(10, 10, 'Qty', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Payment', 1, 0, 'C', true);

$pdf->Ln();

include('koneksi.php');
$sql = "SELECT * FROM `order_form`" . $where;
$hasil_query = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($hasil_query)) {

    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(50, 10, $data['no_or_email'], 1);
    $pdf->Cell(45, 10, date('d F Y', strtotime($data['booking_date'])), 1);
    $pdf->Cell(35, 10, $data['cust_name'], 1);
    $pdf->Cell(35, 10, $data['ro'], 1);
    $pdf->Cell(10, 10, $data['jmlh_ro'], 1);
    $pdf->Cell(25, 10, $data['aqua'], 1);
    $pdf->Cell(10, 10, $data['jmlh_aqua'], 1);
    $pdf->Cell(25, 10, $data['gas3'], 1);
    $pdf->Cell(10, 10, $data['jmlh_gas3'], 1);
    $pdf->Cell(25, 10, $data['gas12'], 1);
    $pdf->Cell(10, 10, $data['jmlh_gas12'], 1);
    $pdf->Cell(25, 10, $data['payment'], 1);

    $pdf->Ln();
}
$pdf->Output();
