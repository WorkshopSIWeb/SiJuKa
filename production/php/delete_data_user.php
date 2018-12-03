<?php
    include 'koneksi.php';
    // $nk = $_GET['nik'];
    // $nl = $_POST['nama_lengkap'];
    // $tgl = $_POST['tgl_lahir'];
    // $alt = $_POST['alamat'];
    // $no = $_POST['no_telepon'];
    // $eml = $_POST['email'];
    // $usn = $_POST['username'];
    // $pass = $_POST['password'];
    // $foto = $_POST['foto_profil'];
    // $jbn = ['jabatan'];
    // $pkjn = ['pekerjaan'];
    // $jenkel = ['jenis_kelamin'];

$query = mysqli_query($koneksi,"DELETE FROM tbl_user where nik='$_GET[nik]'");
if ($query) {
    header("location:../tabel_user.php");
}else {
    echo "Gagal om";
  }


 ?>