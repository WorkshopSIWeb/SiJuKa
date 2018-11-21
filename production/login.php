<?php
  session_start();

  include 'koneksi.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

  $cek = mysqli_num_rows($login);

  if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['jabatan']=="admin"){
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "admin";
      header("location:index.php");
    }else if ($data['jabatan']=="pembeli") {
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "pembeli";
      header("location:index3.php");
    }else if ($data['jabatan']=="penjual") {
      $_SESSION['username'] = $username;
      $_SESSION['jabatan'] = "penjual";
      header("location:index2.php");
    }else{
      header("location:loregpembeli.php");
    }
    }
 ?>
