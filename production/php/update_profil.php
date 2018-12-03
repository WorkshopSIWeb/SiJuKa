<?php
  include 'koneksi.php';

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
    // code...
    header("location: ../profile.php");
  }else {
    echo "gagal";
    echo $nik;
    echo $nama_lengkap;
  }
?>
