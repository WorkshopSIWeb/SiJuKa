<?php
    include 'koneksi.php';
    $kk = $_POST['kode_kayu'];
    $nk = $_POST['nama_kayu'];
    $jk = $_POST['jenis_kayu'];
    $ak = $_POST['alamat_kebun'];
    $des = $_POST['deskripsi'];
    $tgl = $_POST['tanggal_upload'];
            $ext_boleh = array('png','jpg','jpeg');
            $foto1 = $_FILES['foto_1']['name'];
            $foto2 = $_FILES['foto_2']['name'];
            $foto3 = $_FILES['foto_3']['name'];
            $x1 = explode('.', $foto1);
            $x2 = explode('.', $foto2);
            $x3 = explode('.', $foto3);
            $ext1 = strtolower(end($x1));
            $ext2 = strtolower(end($x2));
            $ext2 = strtolower(end($x3));
            $size1 = $_FILES['foto_1']['size'];
            $size2 = $_FILES['foto_2']['size'];
            $size3 = $_FILES['foto_3']['size'];
            $file_tmp1 = $_FILES['foto_1']['tmp_name'];
            $file_tmp2 = $_FILES['foto_2']['tmp_name'];
            $file_tmp3 = $_FILES['foto_3']['tmp_name'];
              if (in_array($ext1, $ext_boleh) === true) {
                if ($size1 < 1044070) {
                  move_uploaded_file($file_tmp1, '../foto_kayu/foto1/'.$foto1);
                  move_uploaded_file($file_tmp2, '../foto_kayu/foto2/'.$foto2);
                  move_uploaded_file($file_tmp3, '../foto_kayu/foto3/'.$foto3);
                  
$query = mysqli_query($koneksi,"INSERT INTO tbl_kayu (kode_kayu, nama_kayu, jenis_kayu, alamat_kebun, deskripsi, tanggal_upload, foto_1, foto_2, foto_3,) VALUES ('$kk','$nk','$jk','$ak','$des','$tgl','$foto1','$foto2','$foto3')");
if ($query) {
    echo "<script>alert('S U K S E S. . . Data Berhasil Ditambahkan ! ! !');
            window.location='../tabel_kebun.php'</script>";
    // header("location:../tabel_kebun.php");
}else {
    echo "<script>alert('G A G A L . . . Data Gagal Ditambahkan ! ! !')";
  }
}
}
 ?>