<?php
header("content-type; application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Data_Invoice.xls");
?>

<table border="1" width="100%">
    <tr>
        <td colspan="12" align="center" style="background-color: rgb(135, 200, 255);">
            <h1>Laporan Print Invoice Berdasarkan <?php echo $judul ?></h1>
        </td>
    </tr>
    <tr align="center" style="background-color: #cccccc;">
        <td><b>No Number or Email</td>
        <td><b>Booking Date</td>
        <td><b>Customer Name</td>
        <td><b>Product</td>
        <td><b>Qty</td>
        <td><b>Product</td>
        <td><b>Qty</td>
        <td><b>Product</td>
        <td><b>Qty</td>
        <td><b>Product</td>
        <td><b>Qty</td>
        <td><b>Payment</td>

    </tr>
    <?php
    include('koneksi.php');
    $sql = "SELECT * FROM `order_form`" . $where;
    $hasil_query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($hasil_query)) {


    ?>
        <tr>
            <td><?php echo $data['no_or_email']; ?> </td>
            <td><?php echo  date('d F Y', strtotime($data['booking_date'])); ?> </td>
            <td><?php echo $data['cust_name']; ?> </td>
            <td><?php echo $data['ro']; ?> </td>
            <td><?php echo $data['jmlh_ro']; ?> </td>
            <td><?php echo $data['aqua']; ?> </td>
            <td><?php echo $data['jmlh_aqua']; ?></td>
            <td><?php echo $data['gas3']; ?></td>
            <td><?php echo $data['jmlh_gas3']; ?></td>
            <td><?php echo $data['gas12']; ?> </td>
            <td><?php echo $data['jmlh_gas12']; ?> </td>
            <td><?php echo $data['payment']; ?> </td>
        </tr>

    <?php
    }
    ?>
</table>