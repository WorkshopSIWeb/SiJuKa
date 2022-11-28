<?php
  include 'koneksi.php';

  $pengirim = $_POST['pengirim'];
  $penerima = $_POST['penerima'];
  $chat = $_POST['chat'];

  $proses = mysqli_query($koneksi, "INSERT INTO tbl_chat(nik_kirim, nik_terima, isi_chat) VALUES('$pengirim', '$penerima', '$chat')");

  if ($proses) {
    header("location: ../chat/index.php?id=$pengirim&trm=$penerima");
  }
 ?>
