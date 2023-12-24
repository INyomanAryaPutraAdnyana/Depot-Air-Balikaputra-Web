<?php
$no_or_email = $_POST['no_or_email'];
$fullname = $_POST['fullname'];
$user = $_POST['user'];
$pass = $_POST['pass'];

include "koneksi.php";

$sql = "
INSERT INTO `registrasi`(`no_or_email`,`fullname`,`user`,`pass`) VALUES ('" . $no_or_email . "','" . $fullname . "','" . $user . "','" . $pass . "')
";

mysqli_query($koneksi, $sql);
?>

<script type="text/javascript">
    alert("Data Berhasil di Simpan !")
    window.open("login.php", "_self")
</script>