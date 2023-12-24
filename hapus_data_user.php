<?php
$no_or_email = $_GET['no_or_email'];

include "koneksi.php";
$hapus = "DELETE  FROM `registrasi` WHERE `no_or_email`='" . $no_or_email . "'";
mysqli_query($koneksi, $hapus);
?>
<script type="text/javascript">
    alert("Data Berhasil di Hapus !!");
    window.open("dataUser.php", "_self");
</script>