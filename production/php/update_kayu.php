<?php
  include 'koneksi.php';

    $kk = $_POST['kode_kayu'];
    $nk = $_POST['nama_kayu'];
    $jk = $_POST['jenis_kayu'];
    $ak = $_POST['alamat_kebun'];
    $des = $_POST['deskripsi'];
    $tgl = $_POST['tanggal_upload'];
    $f_1 = $_POST['foto_1'];
    $f_2 = $_POST['foto_2'];
    $f_3 = $_POST['foto_3'];

  $update = mysqli_query($koneksi,"UPDATE tbl_kayu SET nama_kayu = '$nk', jenis_kayu = '$jk', alamat_kebun = '$ak', deskripsi = '$des', tanggal_upload = '$tgl', foto_1 = '$f_1', foto_2 = '$f_2', foto_3 = '$f_3' WHERE kode_kayu = '$kk'");
  if ($update) {
    // code...
    echo "<script>alert('S U K S E S. . . Data Berhasil DiUbah ! ! !');
            window.location='../tabel_kebun.php'</script>";
    // header("location: ../tabel_user.php");
  }else {
    echo "<script>alert('G A G A L . . . Data Gagal Diubah ! ! !')";
    echo $kode_kayu;
    echo $nama_kayu;
  }
?>
