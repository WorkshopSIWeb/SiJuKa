<?php
$orang = $_SESSION['username'];
$al = mysqli_query($koneksi, "SELECT jabatan FROM tbl_user WHERE username='$orang'");
while ($row = $al->fetch_assoc()) {
echo $row['jabatan']."<br>";
echo $_SESSION['jabatan'];
}
  if($_SESSION['status']!="login"){
      header("location:loregpembeli.php?pesan=belum_login");
    }
if ($_SESSION['jabatan'] != 'admin') {
      header("location:loregpembeli.php?pesan=bukan_admin");
    }
    ?>
