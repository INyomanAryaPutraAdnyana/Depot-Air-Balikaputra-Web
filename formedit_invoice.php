<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Us</title>


</head>

<body>
    <?php
    include('header.php');

    include('koneksi.php');
    $sql = "SELECT * FROM `order_form` WHERE `no_or_email`='" . $_GET['no_or_email'] . "'";
    $hasil_query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($hasil_query);
    ?>

    <div class="right-content">
        <div class="orderUs">
            <form action="update_invoice.php" method="post">
                <table border="1" width="100%">
                    <tr>
                        <td colspan="3" align="center"><b>Form Order</b></td>
                    </tr>
                    <tr>
                        <td>No Number or Email</td>
                        <td>:</td>
                        <td><input type="text" id="no_or_email" name="no_or_email" readonly="" value="<?php echo $data['no_or_email']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Booking Date</td>
                        <td>:</td>
                        <td>
                            <input type="date" id="booking_date" name="booking_date" value="<?php echo $data['booking_date']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Customer Name</td>
                        <td>:</td>
                        <td><input type="text" id="cust_name" name="cust_name" value="<?php echo $data['cust_name']; ?>"></td>
                    </tr>

                    <tr>
                        <td>Product</td>
                        <td>:</td>
                        <td>
                            <?php
                            if ($data['ro'] == 'Bali Kaputra RO') {
                            ?>
                                <input type="radio" id="ro" name="ro" value="Bali Kaputra RO" checked="checked"> Bali Kaputra RO =
                                <input type="text" id="jmlh_ro" name="jmlh_ro" value="<?php echo $data['jmlh_ro']; ?>"><br><br>
                                <input type="radio" id="aqua" name="aqua" value="Aqua"> Aqua &emsp; &emsp; &emsp; &emsp; =
                                <input type="text" id="jmlh_aqua" name="jmlh_aqua" value="<?php echo $data['jmlh_aqua']; ?>"><br><br>
                                <input type="radio" id="gas3" name="gas3" value="Gas 3 Kg"> Gas 3 Kg &emsp; &emsp; &nbsp; &nbsp;=
                                <input type="text" id="jmlh_gas3" name="jmlh_gas3" value="<?php echo $data['jmlh_gas3']; ?>"><br><br>
                                <input type="radio" id="gas12" name="gas12" value="Gas 12 Kg"> Gas 12 Kg &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;=
                                <input type="text" id="jmlh_gas12" name="jmlh_gas12" value="<?php echo $data['jmlh_gas12']; ?>">
                            <?php
                            } elseif ($data['aqua'] == 'Aqua') {
                            ?>
                                <input type="radio" id="ro" name="ro" value="Bali Kaputra RO"> Bali Kaputra RO =
                                <input type="text" id="jmlh_ro" name="jmlh_ro" value="<?php echo $data['jmlh_ro']; ?>"><br><br>
                                <input type="radio" id="aqua" name="aqua" value="Aqua" checked="checked"> Aqua &emsp; &emsp; &emsp; &emsp; =
                                <input type="text" id="jmlh_aqua" name="jmlh_aqua" value="<?php echo $data['jmlh_aqua']; ?>"><br><br>
                                <input type="radio" id="gas3" name="gas3" value="Gas 3 Kg"> Gas 3 Kg &emsp; &emsp; &nbsp; &nbsp;=
                                <input type="text" id="jmlh_gas3" name="jmlh_gas3" value="<?php echo $data['jmlh_gas3']; ?>"><br><br>
                                <input type="radio" id="gas12" name="gas12" value="Gas 12 Kg"> Gas 12 Kg &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;=
                                <input type="text" id="jmlh_gas12" name="jmlh_gas12" value="<?php echo $data['jmlh_gas12']; ?>">
                            <?php
                            } elseif ($data['gas3'] == 'Gas 3 Kg') {
                            ?>
                                <input type="radio" id="ro" name="ro" value="Bali Kaputra RO"> Bali Kaputra RO =
                                <input type="text" id="jmlh_ro" name="jmlh_ro" value="<?php echo $data['jmlh_ro']; ?>"><br><br>
                                <input type="radio" id="aqua" name="aqua" value="Aqua"> Aqua &emsp; &emsp; &emsp; &emsp; =
                                <input type="text" id="jmlh_aqua" name="jmlh_aqua" value="<?php echo $data['jmlh_aqua']; ?>"><br><br>
                                <input type="radio" id="gas3" name="gas3" value="Gas 3 Kg" checked="checked"> Gas 3 Kg &emsp; &emsp; &nbsp; &nbsp;=
                                <input type="text" id="jmlh_gas3" name="jmlh_gas3" value="<?php echo $data['jmlh_gas3']; ?>"><br><br>
                                <input type="radio" id="gas12" name="gas12" value="Gas 12 Kg"> Gas 12 Kg &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;=
                                <input type="text" id="jmlh_gas12" name="jmlh_gas12" value="<?php echo $data['jmlh_gas12']; ?>">
                            <?php
                            } elseif ($data['gas12'] == 'Gas 12 Kg') {
                            ?>
                                <input type="radio" id="ro" name="ro" value="Bali Kaputra RO"> Bali Kaputra RO =
                                <input type="text" id="jmlh_ro" name="jmlh_ro" value="<?php echo $data['jmlh_ro']; ?>"><br><br>
                                <input type="radio" id="aqua" name="aqua" value="Aqua"> Aqua &emsp; &emsp; &emsp; &emsp; =
                                <input type="text" id="jmlh_aqua" name="jmlh_aqua" value="<?php echo $data['jmlh_aqua']; ?>"><br><br>
                                <input type="radio" id="gas3" name="gas3" value="Gas 3 Kg"> Gas 3 Kg &emsp; &emsp; &nbsp; &nbsp;=
                                <input type="text" id="jmlh_gas3" name="jmlh_gas3" value="<?php echo $data['jmlh_gas3']; ?>"><br><br>
                                <input type="radio" id="gas12" name="gas12" value="Gas 12 Kg" checked="checked"> Gas 12 Kg &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;=
                                <input type="text" id="jmlh_gas12" name="jmlh_gas12" value="<?php echo $data['jmlh_gas12']; ?>">
                            <?php
                            }
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Payment</td>
                        <td>:</td>
                        <td> <?php
                                if ($data['payment'] == 'Cash') {
                                ?>
                                <input type="radio" id="payment" name="payment" value="Cash" checked="checked"> Cash
                                <input type="radio" id="payment" name="payment" value="Credit Card"> Credit Card
                            <?php
                                } else {
                            ?>
                                <input type="radio" id="payment" name="payment" value="Cash"> Cash
                                <input type="radio" id="payment" name="payment" value="Credit Card" checked="checked"> Credit Card
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" id="" name="" value="Save">
                            <input type="reset" id="" name="" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php
    include('footer.php')
    ?>
</body>

</html>