<?php
$orang = $_SESSION['username'];

      if ($_SESSION['jabatan'] != 'admin') {
            header("location:loregpembeli.php?pesan=bukan_admin");
            if($_SESSION['status']!="login"){
                header("location:loregpembeli.php?pesan=belum_login");
          }
    }
?>
