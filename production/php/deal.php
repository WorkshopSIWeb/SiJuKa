<?php
  include "koneksi.php";

  $penjual = $_POST['penjual'];
  $pembeli = $_POST['pembeli'];
  $kayu = $_POST['kayu'];

  $laku = mysqli_query($koneksi, "UPDATE tbl_kayu SET status = 'laku' WHERE kode_kayu = '$kayu'");
  if ($laku) {
    $trans = mysqli_query($koneksi, "INSERT INTO tbl_deal(nikjual, nikbeli, kode_kayu) VALUES ('$penjual', '$pembeli', '$kayu')");
    if ($trans) {
      echo "Masuk OM";
    }
  }else {
    echo "Gagal om";
  }

 ?>
