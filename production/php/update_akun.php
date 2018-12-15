<?php
session_start();
  include 'koneksi.php';

  $nik = $_POST['nik'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $user = $_SESSION['jabatan'];

  $upakun = mysqli_query($koneksi, "UPDATE tbl_user SET username = '$username', password = '$password' WHERE nik='$nik'");
  if ($upakun) {
    if ($user == 'pembeli') {
      header('location:../pembeli/setting.php');
    } else if ($user == 'penjual') {
        header('location:../penjual/setting.php');
      }else if($user == 'admin') {
    header('location:../setting.php');
  }else {
    echo "gagal";
  }}
 ?>
