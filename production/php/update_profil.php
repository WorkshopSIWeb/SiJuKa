<?php
  session_start();

  include 'koneksi.php';

  $user = $_SESSION['jabatan'];

  $nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
	$pekerjaan = $_POST['pekerjaan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $update = mysqli_query($koneksi,"UPDATE tbl_user SET nama_lengkap = '$nama_lengkap', tgl_lahir = '$tanggal_lahir', alamat = '$alamat', no_telepon = '$no_telepon', email = '$email', pekerjaan = '$pekerjaan', jenis_kelamin = '$jenis_kelamin' WHERE nik = '$nik'");
  if ($update) {
    if ($user == 'pembeli') {
      header('location:../pembeli/profile.php');
    } else if ($user == 'penjual') {
        header('location:../penjual/profile.php');
      }else if($user == 'admin') {
    header('location:../profile.php');
  }else {
    echo "gagal";
  }}
?>
