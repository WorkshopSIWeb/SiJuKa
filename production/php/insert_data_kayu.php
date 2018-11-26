<?php
    include 'koneksi.php';
    $kk = $_POST['kode_kayu'];
    $nk = $_POST['nama_kayu'];
    $jk = $_POST['jenis_kayu'];
    $ak = $_POST['alamat_kebun'];
    $des = $_POST['deskripsi'];
    $tgl = $_POST['tanggal_upload'];
    $f_1 = $_POST['foto_1'];
    $f_2 = $_POST['foto_2'];
    $f_3 = $_POST['foto_3'];
$query = mysqli_query($koneksi,"INSERT INTO tbl_kayu (kode_kayu, nama_kayu, jenis_kelamin, alamat_kebun, deskripsi, tanggal_upload, foto_1, foto_2, foto_3,) VALUES ('$kk','$nk','$jk','$ak','$des','$tgl','$f_1','$f_2','$f_3')");
if ($query) {
    header("location:../tabel_kebun.php");
}else {
    echo "Gagal om";
  }


 ?>