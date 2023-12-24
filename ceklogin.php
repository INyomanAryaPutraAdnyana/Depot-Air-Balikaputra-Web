<?php
session_start();
include('koneksi.php');
$user = $_POST['user'];
$pass = $_POST['pass'];


$sql = "SELECT * FROM `registrasi` WHERE `user`='" . $user . "' AND `pass`='" . $pass . "'";

//echo $sql;
$hasil_query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($hasil_query);
$nama = $data['fullname'];
$email = $data['no_or_email'];

/*echo 'Nama Anda ='.$nama.'<br>';
echo 'Email Anda ='.$email.'<br>';
*/

if (empty($nama)) {
?>
    <script type="text/javascript">
        alert("Maaf Username atau Password Anda Salah !!!");
        window.open("login.php", "_self");
    </script>
<?php
} else {
    $_SESSION['namasaya'] = $nama;
    $_SESSION['emailsaya'] = $email;
?>
    <script type="text/javascript">
        alert("Anda Berhasil Login");
        window.open("home.php", "_self");
    </script>
<?php
}
?>