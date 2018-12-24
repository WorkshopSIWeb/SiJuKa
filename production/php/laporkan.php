<?php
  include 'koneksi.php';

  $idp = $_POST['nikp'];
  $idd = $_POST['nikd'];
  $ket = $_POST['keterangan'];

  $ext_boleh = array('png','jpg','jpeg');
  $lamp1 = $_FILES['lamp1']['name'];
  $lamp2 = $_FILES['lamp2']['name'];
  $lamp3 = $_FILES['lamp3']['name'];
  $x1 = explode('.', $lamp1);
  $x2 = explode('.', $lamp1);
  $x3 = explode('.', $lamp1);
  $ext1 = strtolower(end($x1));
  $ext2 = strtolower(end($x2));
  $ext2 = strtolower(end($x3));
  $size1 = $_FILES['lamp1']['size'];
  $size2 = $_FILES['lamp2']['size'];
  $size3 = $_FILES['lamp3']['size'];
  $file_tmp1 = $_FILES['lamp1']['tmp_name'];
  $file_tmp2 = $_FILES['lamp2']['tmp_name'];
  $file_tmp3 = $_FILES['lamp3']['tmp_name'];

  if (in_array($ext1, $ext_boleh) === true) {
      if ($size < 1044070) {
          move_uploaded_file($file_tmp1, '../lampiran/lamp1/'.$lamp1);
          move_uploaded_file($file_tmp2, '../lampiran/lamp2/'.$lamp2);
          move_uploaded_file($file_tmp3, '../lampiran/lamp3/'.$lamp3);

          $query = mysqli_query($koneksi, "INSERT INTO tbl_laporkan (kode_pelapor, kode_dilapor, keterangan, lampiran1, lampiran2, lampiran3) VALUES ('$idp','$idd', '$ket', '$lamp1', '$lamp2', '$lamp3')");

          if ($query) {
              header("location:../pembeli/index2.php");
          } else {
              echo "Gagal om";
          }
      }
  }
?>
