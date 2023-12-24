<?php
$no_or_email = $_POST['no_or_email'];
$booking_date = $_POST['booking_date'];
$cust_name = $_POST['cust_name'];
$ro = $_POST['ro'];
$jmlh_ro = $_POST['jmlh_ro'];
$aqua = $_POST['aqua'];
$jmlh_aqua = $_POST['jmlh_aqua'];
$gas3 = $_POST['gas3'];
$jmlh_gas3 = $_POST['jmlh_gas3'];
$gas12 = $_POST['gas12'];
$jmlh_gas12 = $_POST['jmlh_gas12'];
$payment = $_POST['payment'];


include "koneksi.php";

$sql = "
INSERT INTO order_form (`no_or_email`,`booking_date`,`cust_name`,`ro`,`jmlh_ro`,`aqua`,`jmlh_aqua`,`gas3`,`jmlh_gas3`,`gas12`,`jmlh_gas12`,`payment`) VALUES('" . $no_or_email . "','" . $booking_date . "','" . $cust_name . "','" . $ro . "','" . $jmlh_ro . "','" . $aqua . "','" . $jmlh_aqua . "','" . $gas3 . "','" . $jmlh_gas3 . "','" . $gas12 . "','" . $jmlh_gas12 . "','" . $payment . "')
";

mysqli_query($koneksi, $sql);
?>

<script type="text/javascript">
    alert("Data Berhasil di Simpan !")
    window.open("dataInvoice.php", "_self")
</script>