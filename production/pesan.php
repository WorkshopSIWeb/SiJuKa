<?php
  if (isset($_GET['pesan'])) {
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal!";
    }else if ($_GET['pesan'] == "logout") {
      echo "Berhasil Logout!";
    }else if ($_GET['pesan'] == "belum_login") {
      echo "Login dulu bro!";
    }
  }
 ?>
