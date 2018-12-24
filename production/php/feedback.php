<?php
  session_start();
  include 'koneksi.php';

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $isi = $_POST['masukan'];
  $user = $_SESSION['jabatan'];

  $masuk=mysqli_query($koneksi, "INSERT INTO tbl_feedback(nama, email, isi) VALUES('$nama', '$email', '$isi')");

  if ($masuk) {
    if ($user == 'pembeli') {
      echo "<script>alert('Terimakasih Atas Masukannya');
              window.location='../pembeli/index2.php'</script>";
    } elseif ($user == 'penjual') {
      echo "<script>alert('Terimakasih Atas Masukannya');
              window.location='../penjual/index.php'</script>";
    } elseif ($user == 'admin') {
      echo "<script>alert('Terimakasih Atas Masukannya');
              window.location='../index.php'</script>";
    } else {
        echo "gagal";
    }

  }

 ?>
