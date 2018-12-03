<?php
    include 'koneksi.php';
    // $kk = $_POST['kode_kayu'];
    // $nk = $_POST['nama_kayu'];
    // $jk = $_POST['jenis_kayu'];
    // $ak = $_POST['alamat_kebun'];
    // $des = $_POST['deskripsi'];
    // $tgl = $_POST['tanggal_upload'];
    // $f_1 = $_POST['foto_1'];
    // $f_2 = $_POST['foto_2'];
    // $f_3 = $_POST['foto_3'];
$query = mysqli_query($koneksi,"DELETE FROM tbl_kayu where kode_kayu='$_GET[kode_kayu]'");
if ($query) {
    echo "Berhasil Menghapus Data";
    header("location:../tabel_kebun.php");
}else {
    echo "Gagal om";
  }


 ?>