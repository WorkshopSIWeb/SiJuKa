<?php
  include 'koneksi.php';

  $pengirim = $_POST['kirim'];
  $terima = $_POST['terima'];
  $isi = $_POST['chat'];

  $balas = mysqli_query($koneksi, "INSERT INTO tbl_chat(nik_kirim, nik_terima, isi_chat) VALUES ('$pengirim', '$terima', '$isi')");

  if ($balas) {
    header("location: ../chat/index.php?id=$pengirim&trm=$terima");
  }
 ?>
