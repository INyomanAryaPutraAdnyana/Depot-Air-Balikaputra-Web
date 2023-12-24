<?php
$no_or_email = $_POST['no_or_email'];
$filter = $_POST['filter'];
$tgl1 = $_POST['tgl1'];
$tgl2 = $_POST['tgl2'];
$cetak = $_POST['cetak'];

if ($filter == "no_or_email") {
    $where = "WHERE `no_or_email` LIKE '%" . $no_or_email . "%'";
    $judul = "No Number or Email";
} else {
    $where = "WHERE `booking_date` BETWEEN '" . $tgl1 . "' AND '" . $tgl2 . "'";
    $judul = "Tanggal Booking Pesanan";
}
if ($cetak == "Print Excel") {
    include("print_invoice_excel.php");
} else {
    include("print_invoice_pdf.php");
}
