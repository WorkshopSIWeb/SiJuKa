<?php 
include "koneksi.php";
if(isset($_POST['input'])){
	$username=$_POST['username'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$ttl=$_POST['tanggal_lahir'];
	$nik=$_POST['nik'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$foto=$_POST['foto_profile'];
	$input=mysqli_query("INSERT INTO anggota values ('$username','$nama_lengkap','$ttl','$nik','alamat','email','password','foto',)") or die(mysqli_error());
	if($input){
	echo 'Data berhasil ditambahkan! Klik <a href="register.php">disini</a> untuk kembali.';
	}else{
	echo 'Data gagal ditambahkan! Klik <a href="register.php">disini</a> untuk kembali.';
	}
}
?>
 	