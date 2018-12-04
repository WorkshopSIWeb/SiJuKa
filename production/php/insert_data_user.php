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
    // $foto = $_POST['foto_profil'];
    $jbn = $_POST['jabatan'];
    $pkjn = $_POST['pekerjaan'];
    $jenkel = $_POST['jenis_kelamin'];

$query = mysqli_query($koneksi,"INSERT INTO tbl_user (nik, nama_lengkap, tgl_lahir, alamat, no_telepon, email, username, password, foto_profil, jabatan, pekerjaan, jenis_kelamin) VALUES ('$nk','$nl','$tgl','$alt','$no','$eml','$usn','$pass','$foto','$jbn','$pkjn','$jenkel')");
if ($query) {
    echo "<script>alert('Data Berhasil Ditambahkan!');history.go(-1);</script>";
    header("location:../tabel_user.php");
}else {
    echo "<script>alert('Data Gagal Ditambahkan!');history.go(-1);</script>";
    
  }


 ?>