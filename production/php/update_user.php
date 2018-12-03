<?php
  include 'koneksi.php';

  $nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $foto_profil = $_POST['foto_profil'];
  $jabatan = $_POST['jabatan'];
	$pekerjaan = $_POST['pekerjaan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $update = mysqli_query($koneksi,"UPDATE tbl_user SET nama_lengkap = '$nama_lengkap', tgl_lahir = '$tgl_lahir', alamat = '$alamat', no_telepon = '$no_telepon', email = '$email', username = '$username', password = '$password', foto_profil = '$foto_profil', jabatan = '$jabatan', pekerjaan = '$pekerjaan', jenis_kelamin = '$jenis_kelamin' WHERE nik = '$nik'");
  if ($update) {
    // code...
    header("location: ../tabel_user.php");
  }else {
    echo "gagal";
    echo $nik;
    echo $nama_lengkap;
  }
?>
