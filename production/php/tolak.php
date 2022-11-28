<?php
  include 'koneksi.php';

  $kd = $_POST['pesan'];
  $id = $_POST['kayu'];

  $tolak = mysqli_query($koneksi, "UPDATE tbl_pesan SET status='ditolak' WHERE kode_pesan = '$kd'");
  if ($tolak) {
      $ky = mysqli_query($koneksi, "UPDATE tbl_kayu SET status = 'belum laku' WHERE kode_kayu='$id'");
      if ($ky) {
          header("location: ../penjual/daftar_deal.php");
      } else {
          echo "gagal om";
      }
  } else {
      echo "gagal boy";
  }
?>
