<?php
$no_or_email = $_POST['no_or_email'];
$fullname = $_POST['fullname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

include "koneksi.php";

$sql = "UPDATE `registrasi` SET `fullname` = '" . $fullname . "', `user` = '" . $user . "', `pass` = '" . $pass . "' WHERE `no_or_email` = '" . $no_or_email . "'";

mysqli_query($koneksi, $sql);
?>

<script type="text/javascript">
    alert("Data Berhasil di Edit !")
    window.open("dataUser.php", "_self")
</script>