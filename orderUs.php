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
    include('header.php')
    ?>
    <div class="right-content">
        <div class="orderUs">
            <form action="simpanOrder.php" method="post">
                <table border="1" width="100%" cellspacing="0" height="400px">
                    <tr>
                        <td colspan="3" align="center" class="judul" style="font-size: 30px;">Form Order</td>
                    </tr>
                    <tr>
                        <td><b>No Number or Email</td>
                        <td><b>:</td>
                        <td><input type="text" id="no_or_email" name="no_or_email" size="125px" placeholder="Please enter your number or e-mail here "></td>
                    </tr>

                    <tr>
                        <td><b>Booking Date</td>
                        <td><b>:</td>
                        <td>
                            <input type="date" id="booking_date" name="booking_date" style="width: 100%;">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Customer Name</td>
                        <td><b>:</td>
                        <td><input type="text" id="cust_name" name="cust_name" size="125px" placeholder="Please enter your name "></td>
                    </tr>

                    <tr>
                        <td><b>Product</td>
                        <td><b>:</td>
                        <td><input type="radio" id="ro" name="ro" value="Bali Kaputra RO"><b> Bali Kaputra RO =
                                <input type="text" id="jmlh_ro" name="jmlh_ro" placeholder="Fill in your order Qty" size="100px"><br><br>
                                <input type="radio" id="aqua" name="aqua" value="Aqua"> <b>Aqua &emsp; &emsp; &emsp; &emsp; =
                                    <input type="text" id="jmlh_aqua" name="jmlh_aqua" placeholder="Fill in your order Qty" size="101px"><br><br>
                                    <input type="radio" id="gas3" name="gas3" value="Gas 3 Kg"> <b>Gas 3 Kg &emsp; &emsp; &nbsp; &nbsp;=
                                        <input type="text" id="jmlh_gas3" name="jmlh_gas3" placeholder="Fill in your order Qty" size="101px"><br><br>
                                        <input type="radio" id="gas12" name="gas12" value="Gas 12 Kg"><b> Gas 12 Kg &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;=
                                            <input type="text" id="jmlh_gas12" name="jmlh_gas12" placeholder="Fill in your order Qty" size="101px">
                        </td>
                    </tr>

                    <tr>
                        <td><b>Payment</td>
                        <td><b>:</td>
                        <td><input type="radio" id="payment" name="payment" value="Cash"> <b>Cash
                                &emsp; <input type="radio" id="payment" name="payment" value="Credit Card"> <b>Credit Card

                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" id="" name="" value="Simpan">
                            &emsp; &emsp;
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