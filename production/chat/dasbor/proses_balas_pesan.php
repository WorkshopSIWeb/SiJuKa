<?php

include '../../koneksi.php';

$pengirim_balas_pesan    = $_POST['pengirim_balas_pesan'];
$penerima_balas_pesan     = $_POST['penerima_balas_pesan'];
$subyek_balas_pesan         = $_POST['subyek_balas_pesan'];
$isi_balas_pesan      = $_POST['isi_balas_pesan'];

	
  $isi = mysqli_query($koneksi, "INSERT INTO pesan(id_pengirim, id_penerima, subyek_pesan, isi_pesan, sudah_dibaca)
																	VALUES('$pengirim_balas_pesan','$penerima_balas_pesan','Re: $subyek_balas_pesan','$isi_balas_pesan', 'belum')");
