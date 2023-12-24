<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Invoice</title>

</head>

<body>
    <?php
    include('header.php')
    ?>
    <div class="right-content">
        <div class="dataInvoice">
            <a href="orderUs.php">
                <center><img src="assets//add.png" alt="add" height="20"><b>Tambah Data </b></center>
            </a>
            <table border="1" width="100%" cellspacing="3">
                <tr class="judul">
                    <td>Mobile Number or Email</td>
                    <td>Booking Date</td>
                    <td>Username</td>
                    <td>Product</td>
                    <td>Qty</td>
                    <td>Product</td>
                    <td>Qty</td>
                    <td>Product</td>
                    <td>Qty</td>
                    <td>Product</td>
                    <td>Qty</td>
                    <td>Payment</td>
                    <td>Action</td>
                </tr>
                <?php
                include('koneksi.php');
                $sql = "SELECT * FROM `order_form`";

                $hasil_query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($hasil_query)) {

                ?>

                    <tr>
                        <td><?php echo $data['no_or_email']; ?> </td>
                        <td><?php echo $data['booking_date']; ?> </td>
                        <td><?php echo $data['cust_name']; ?> </td>
                        <td><?php echo $data['ro']; ?> </td>
                        <td><?php echo $data['jmlh_ro']; ?> </td>
                        <td><?php echo $data['aqua']; ?> </td>
                        <td><?php echo $data['jmlh_aqua']; ?> </td>
                        <td><?php echo $data['gas3']; ?> </td>
                        <td><?php echo $data['jmlh_gas3']; ?> </td>
                        <td><?php echo $data['gas12']; ?> </td>
                        <td><?php echo $data['jmlh_gas12']; ?> </td>
                        <td><?php echo $data['payment']; ?> </td>
                        <td> <a href="formedit_invoice.php?no_or_email=<?php echo $data['no_or_email']; ?>">
                                <img src="assets//edit.png" alt="edit" height="20">Edit</a> |
                            <a href="hapus_data_invoice.php?no_or_email=<?php echo $data['no_or_email']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">
                                <img src="assets//delete.png" alt="delete" height="20">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <?php
            include('footer.php')
            ?>
        </div>
    </div>
</body>

</html>