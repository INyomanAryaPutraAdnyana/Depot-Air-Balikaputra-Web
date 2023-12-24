<?php
session_start();
session_destroy();
?>

<script type="text/javascript">
    alert("Anda Sudah Berhasil Logout !!!");
    window.open("login.php", "_self");
</script>