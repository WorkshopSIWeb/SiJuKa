<?php
    include 'koneksi.php';
    $nk = $_POST['nik'];
    $nl = $_POST['nama_lengkap'];
    $tgl = $_POST['tgl_lahir'];
    $alt = $_POST['alamat'];
    $no = $_POST['no_telepon'];
    $eml = $_POST['email'];
    $usn = $_POST['username'];
    $pass = $_POST['password'];
    $foto = $_POST['foto_profil'];
    $jbn = ['jabatan'];
    $pkjn = ['pekerjaan'];
    $jenkel = ['jenis_kelamin'];

$query = mysqli_query($koneksi,"INSERT INTO tbl_user (nik, nama_lengkap, tgl_lahir, alamat, no_telepon, email, username, password, foto_profil, jabatan, pekerjaan, jenis_kelamin) VALUES ('$nk','$nl','$tgl','$alt','$no','$eml','$usn','$pass','$foto','$jbn','$pkjn','$jenkel')");
if ($query) {
    header("location:../tabel_user.php");
}else {
    echo "Gagal om";
  }


 ?>