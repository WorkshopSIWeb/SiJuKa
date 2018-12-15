<?php
  include 'koneksi.php';

    $kk = $_POST['kode_kayu'];
    $nk = $_POST['nama_kayu'];
    $jk = $_POST['jenis_kayu'];
    $ak = $_POST['alamat_kebun'];
    $des = $_POST['deskripsi'];
    $hrg = $_POST['harga'];


  $update = mysqli_query($koneksi,"UPDATE tbl_kayu SET nama_kayu = '$nk', jenis_kayu = '$jk', alamat_kebun = '$ak', deskripsi = '$des', harga = '$hrg'  WHERE kode_kayu = '$kk'");
  if ($update) {
    // code...
    echo "<script>alert('S U K S E S. . . Data Berhasil DiUbah ! ! !');
            window.location='../penjual/tabel_kayu2.php'</script>";
    // header("location: ../tabel_user.php");
  }else {
    echo "<script>alert('G A G A L . . . Data Gagal Diubah ! ! !')";
    echo $kode_kayu;
    echo $nama_kayu;
  }
?>
