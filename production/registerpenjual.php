<?php
//if(isset($_POST['REGISTER'])){
	include 'koneksi.php';

	$nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$foto_profil = $_POST['foto_profil'];


$query = mysqli_query($koneksi,"INSERT INTO tbl_user VALUES ('$nik','$nama_lengkap','$tanggal_lahir','$alamat','$no_telepon','$email','$username','$password','$foto_profil','penjual')");
if($query){
echo 'data berhasil di tambah<br>';
echo '<a href="loregpenjual.html">kembali</a>';
}else{
echo 'gagal memasukkan data';
echo '<a href="index.php">kembali</a>';
}
//}
?>
