<?php
if (isset($_POST['username']) && $_POST['username']) {
    // memasukan file koneksi ke database
  include 'koneksi.php';

    // menyimpan variable yang dikirim Form

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
        // cek nilai variable

    if (empty($username)) {
        header('location:reset_password.php' .base64_encode('Username tidak boleh kosong'));
    }

    if (empty($password)) {
        header('location:reset_password.php' .base64_encode('Password tidak boleh kosong'));
    }
    // validasi apakah password dengan repassword sama
    if ($password != $repassword) { // jika tidak sama
        echo "<script>alert('Password dan Konfirmasi Password harus sama'); window.location.href = 'reset_password.php';</script>";
    }else {
      // code...

    // encryption dengan md5
    $password = ($password);
    // $level = 'member'; // default,
    // SQL Insert

    $sql ="UPDATE `sijuka`.`tbl_user` SET `password` = '" . ($_POST["password"]). "' WHERE username='$username'";
    $insert = $koneksi->query($sql);
    // jika gagal
    if (! $insert) {
        echo "<script>alert('".$dbconnect->error."'); window.location.href = './reset_password.php';</script>";
    } else {
        echo "<script>alert('Sandi berhasil diubah'); window.location.href = './loregpembeli.php';</script>";
    }}
}
?>
