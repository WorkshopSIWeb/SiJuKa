<?php
  include 'koneksi.php';

  $nama_kayu = $_POST['nama_kayu'];
  $nik = $_POST['nik'];
  $jenis_kayu = $_POST['jenis_kayu'];
  $alamat_kebun = $_POST['alamat'];
  $deskripsi = $_POST['deskripsi'];

  $harga = $_POST['harga'];

    $ext_boleh = array('png','jpg','jpeg');
    $foto1 = $_FILES['foto1']['name'];
    $foto2 = $_FILES['foto2']['name'];
    $foto3 = $_FILES['foto3']['name'];
    $x1 = explode('.', $foto1);
    $x2 = explode('.', $foto1);
    $x3 = explode('.', $foto1);
    $ext1 = strtolower(end($x1));
    $ext2 = strtolower(end($x2));
    $ext2 = strtolower(end($x3));
    $size1 = $_FILES['foto1']['size'];
    $size2 = $_FILES['foto2']['size'];
    $size3 = $_FILES['foto3']['size'];
    $file_tmp1 = $_FILES['foto1']['tmp_name'];
    $file_tmp2 = $_FILES['foto2']['tmp_name'];
    $file_tmp3 = $_FILES['foto3']['tmp_name'];
      if (in_array($ext1, $ext_boleh) === true) {
        if ($size < 1044070) {
          move_uploaded_file($file_tmp1, '../foto_kayu/foto1/'.$foto1);
          move_uploaded_file($file_tmp2, '../foto_kayu/foto2/'.$foto2);
          move_uploaded_file($file_tmp3, '../foto_kayu/foto3/'.$foto3);

          $query = mysqli_query($koneksi, "INSERT INTO tbl_kayu (nik, nama_kayu, jenis_kayu, alamat_kebun, deskripsi, foto_1, foto_2, foto_3, harga, status) VALUES ('$nik','$nama_kayu', '$jenis_kayu', '$alamat_kebun', '$deskripsi', '$foto1', '$foto2', '$foto3','$harga','belum laku')");

          if($query){
            header("location:../penjual/index.php");
          }else {
            echo "Gagal om";
      }


}
  }
 ?>
