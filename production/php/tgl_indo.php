<?php
  function tgl_indo($tangal){
    $bulan = array(
      1 => 'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecah = explode('-', $tangal);

    return $pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];
  }

 ?>
