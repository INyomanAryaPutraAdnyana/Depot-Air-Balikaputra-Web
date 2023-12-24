<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registrasi </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('koneksi.php');
    $sql = "SELECT * FROM `registrasi` WHERE `no_or_email`='" . $_GET['no_or_email'] . "'";
    $hasil_query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($hasil_query);
    ?>

    <div class="container">
        <form action="update_registrasi.php" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"> EDIT REGISTRASI</p>
            <div class="input-group">
                <input type="text" placeholder="Mobile Number or Email" name="no_or_email" id="no_or_email" required readonly="" value="<?php echo $data['no_or_email']; ?>">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Full Name" name="fullname" id="fullname" required value="<?php echo $data['fullname']; ?>">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="user" id="user" required value="<?php echo $data['user']; ?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" id="pass" required value="<?php echo $data['pass']; ?>">
            </div>
            <div class="input-group">
                <button class="btn">Sign up</button>
            </div>
            <p class="login-register1">By signing up, you agree to our</p>
            <p class="login-register-text">Terms & Privacy Policy</p>
        </form>
    </div>
</body>

</html>

</form>
</div>
</body>

</html>