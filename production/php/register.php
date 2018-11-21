<?php
	include 'koneksi.php';
	
	$foto_profile = $_POST['foto_profile'];
	$username = $_POST['username'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$nik = $_POST['nik'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	mysqli_query($koneksi, "INSERT INTO tabel_user (foto_profile, username, password, nama_lengkap, tanggal_lahir, nik, alamat, email) values('$foto_profile','$username','$nama_lengkap','$tanggal_lahir','$nik','$alamat','$email','$password')");
	
	header("location: login.html");
?>