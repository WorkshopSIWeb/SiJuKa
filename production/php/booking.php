<?php
  include 'koneksi.php';

  $pemilik = $_POST['pemilik'];
  $pemesan =$_POST['pemesan'];
  $id = $_POST['kode_kayu'];

  $isi = mysqli_query($koneksi, "INSERT INTO pesan(id_pengirim, id_penerima, subyek_pesan, isi_pesan, sudah_dibaca)
  VALUES('$pemesan','$pemilik','BOOKING KAYU','$id', 'belum')");
  if ($isi) {
    $booking = mysqli_query($koneksi, "UPDATE tbl_kayu SET status = 'booked' WHERE kode_kayu = '$id'");
    header("location:../inbox.php");
  }else {
    echo "gagal";
  }
?>
