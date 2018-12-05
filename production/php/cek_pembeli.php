<?php
$orang = $_SESSION['username'];

      if ($_SESSION['jabatan'] != 'pembeli') {
            echo "Anda bukan pembeli";
            if($_SESSION['status']!="login"){
                header("location:loregpembeli.php?pesan=belum_login");
          }
    }
?>
