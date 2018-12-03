<?php
  include 'koneksi.php';

  $nik = $_POST['nik'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $upakun = mysqli_query($koneksi, "UPDATE tbl_user SET username = '$username', password = '$password' WHERE nik='$nik'");
  if ($upakun) {
    header('location:../setting.php');
  }else {
    echo "gagal";
  }
 ?>
