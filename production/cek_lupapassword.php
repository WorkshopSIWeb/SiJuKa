<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username 	  = $_POST['username'];
$email 	  = $_POST['email'];

// menyeleksi data admin dengan username dan email yang sesuai

$data = mysqli_query($koneksi,"select * from tbl_user where username='$username' and email='$email'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){

	header("location:reset_password.php");
}else{

	header("location:ForgetPassword.php");

}
?>
