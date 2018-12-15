<?php
    include 'koneksi.php';
$query = mysqli_query($koneksi,"DELETE FROM tbl_user where nik='$_GET[nik]'");
if ($query) {
    header("location:../tabel_user.php");
}else {
    echo "Gagal om";
  }


 ?>