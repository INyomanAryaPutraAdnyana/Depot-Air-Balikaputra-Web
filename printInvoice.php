<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Invoice</title>

</head>

<body>
    <?php
    include('header.php')
    ?>
    <div class="right-content">
        <div class="printInvoice">
            <form action="print.php" method="POST">
                <table border="1" align="center" width="100%" height="250px" cellspacing="0">
                    <tr>
                        <td colspan="3" align="center" class="judul" style="font-size: 30px;">Print Invoice</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="filter" checked="checked" value="no_or_email"><b> No Number or Email </b></td>
                        <td><b>:</td>
                        <td><input type="text" name="no_or_email" id="no_or_email" size="74px" placeholder="Please enter your number or e-mail here "></td>
                    </tr>

                    <tr>
                        <td><input type="radio" name="filter" value="booking_date"><b> Booking Date</b></td>
                        <td><b>:</td>
                        <td><input type="date" name="tgl1" id="tgl1" style="width: 46%;"> <b>s/d <input type="date" name="tgl2" id="tgl2" style="width: 46%;"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><input type="submit" value="Print Excel" name="cetak" id="cetak" style="margin-right: 20px; "> &emsp; &emsp; <input type="submit" value="Print PDF" name="cetak" id="cetak" style="margin-right: 40px;"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
<?php
include('footer.php')
?>

</html>