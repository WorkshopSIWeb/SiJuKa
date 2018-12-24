<?php
  include 'koneksi.php';

  $id = $_GET['kode_kayu'];

  $del = mysqli_query($koneksi, "DELETE FROM tbl_kayu WHERE kode_kayu = '$id' ");
  if ($del) {
    header("location:../penjual/tabel_kayu2.php?ko=sip");
  }else {
    echo "Gagal OM";
  }
 ?>
