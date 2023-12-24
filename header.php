<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BALI KAPUTRA</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <?php
    session_start();
    $namasaya = $_SESSION['namasaya'];
    $emailsaya = $_SESSION['emailsaya'];
    if (empty($_SESSION['namasaya'])) {
    ?>
        <script type="text/javascript">
            alert("Maaf Anda Harus Login Terlebih Dahulu !!!");
            window.open("login.php", "_self");
            <?php
        }
            ?>
        </script>

        <header>
            <div class="jumbotron">
                <h1>BALI KAPUTRA</h1>
                <br>
                <p><q>Excellent service and fast response</q></p>
            </div>
            <!--! NAVBAR -->
            <nav>
                <!--! Isi Navbar -->
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product.php">Product</a> </li>
                    <li><a href="orderUs.php">Order Us</a></li>
                    <li><a href="printInvoice.php">Print invoice</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="left-content">
                    <img src="assets/user.jpg" class="featured-image" alt="user">
                    <h3><?php echo $namasaya ?></h3>
                    <hr>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <hr>
                        <li><a href="product.php">Product</a></li>
                        <hr>
                        <li><a href="#aqua">Aqua</a> </li>
                        <li><a href="#gas3">Gas 3Kg</a> </li>
                        <li><a href="#gas12">Gas 12 Kg</a> </li>
                        <li><a href="#ro">Isi Ulang RO</a> </li>
                        <hr>
                        <li><a href="orderUs.php">Order Us</a></li>
                        <hr>
                        <li><a href="dataUser.php">Data User</a> </li>
                        <hr>
                        <li><a href="dataInvoice.php">Data Invoice</a> </li>
                        <hr>
                        <li><a href="printInvoice.php">Print invoice</a></li>
                        <hr>
                    </ul>
                    <div class="input-group">
                        <button name="submit" class="btn"> <a href="logout.php">Log Out</a> </button>
                    </div>
                </div>