<?php
  include 'koneksi.php';

  $nama_kayu = $_POST['nama_kayu'];
  $jenis_kayu = $_POST['jenis_kayu'];
  $alamat_kebun = $_POST['alamat'];
  $deskripsi = $_POST['deskripsi'];
  $tgl = date('Y-m-y');

  $query = mysqli_query($koneksi, "INSERT INTO tbl_kayu (nama_kayu, jenis_kayu, alamat_kebun, deskripsi, tanggal_upload, foto_1, foto_2, foto_3) VALUES ('$nama_kayu', '$jenis_kayu', '$alamat_kebun', '$deskripsi', '$tgl', 1, 2, 3)");

  if($query){
    header("location:../index.php");
  }else {
    echo "Gagal om";
  }
 ?>
