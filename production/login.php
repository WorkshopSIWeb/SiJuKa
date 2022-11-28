<?php
  session_start();

  include 'koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

  $cek = mysqli_num_rows($login);

  if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    $_SESSION['username'] = $username;
	  $_SESSION['status'] = "login";
    $_SESSION['nik'];

    if($data['jabatan']=="admin"){
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "admin";
      header("location:index.php");
    }else if ($data['jabatan']=="pembeli") {
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "pembeli";
      header("location:pembeli/index.php");
    }else if ($data['jabatan']=="penjual") {
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "penjual";
      header("location:penjual/index.php");
    }else{
      header("location:loregpembeli.php");
    }
  }else {
    header("location:loregpembeli.php?pesan=gagal");
  }
 ?>
