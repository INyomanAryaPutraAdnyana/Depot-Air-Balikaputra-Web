<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>

</head>

<body>
    <?php
    include('header.php')
    ?>
    <div class="right-content">
        <div class="dataUser">
            <a href="signup.php">
                <center><img src="assets//add.png" alt="add" height="20"><b>Tambah Data </b></center>
            </a>
            <table border="1" width="100%" cellspacing="3">
                <tr class="judul">
                    <td>Mobile Number or Email</td>
                    <td>Full Name</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Action</td>
                </tr>
                <?php
                include('koneksi.php');
                $sql = "SELECT `no_or_email`,`fullname`,`user`,`pass` FROM `registrasi`";

                $hasil_query = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($hasil_query)) {

                ?>

                    <tr>
                        <td><?php echo $data['no_or_email']; ?> </td>
                        <td><?php echo $data['fullname']; ?> </td>
                        <td><?php echo $data['user']; ?> </td>
                        <td><?php echo $data['pass']; ?> </td>
                        <td> <a href="formedit_registrasi.php?no_or_email=<?php echo $data['no_or_email']; ?>">
                                <img src="assets//edit.png" alt="edit" height="20">Edit</a> |
                            <a href="hapus_data_user.php?no_or_email=<?php echo $data['no_or_email']; ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">
                                <img src="assets//delete.png" alt="delete" height="20">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <?php
            include('footer.php')
            ?>
        </div>
    </div>
</body>

</html>