<?php
session_start();

include '../koneksi.php';
include '../php/cek_user2.php';
include '../php/tgl_indo.php';
include '../php/rupiah.php';

 ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/IMG-20181016-WA0004.jpg" type="image/ico" />

    <title>Si_Juka | Sistem Informasi Penjualan Kayu Online Terlengkap </title>
  </head>
  <body>
    <center>
      <h1>Detail Deal</h1>
    </center>
    <!-- pembeli section -->
      <table>
        <tr>
          <th width="150px">

          </th>
          <th>

          </th>
          <th width="300px">

          </th>
        </tr>
        <tr>
          <?php
            $kdky = $_GET['kayu'];
            $deal=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_deal WHERE kode_kayu = '$kdky'"));
            $penjual = $deal['nikjual'];
            $pembeli = $deal['nikbeli'];
            $tgl = $deal['tanggal_deal'];
           ?>
          <td>
            Nama Pembeli
          </td>
          <td>
            :
          </td>
          <td>
            <?php
              $beli = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_lengkap, alamat FROM tbl_user WHERE nik = '$pembeli'"));
              echo $beli['nama_lengkap'];
             ?>
          </td>
        </tr>
        <tr>
          <td>
            Alamat Pembeli
          </td>
          <td>
            :
          </td>
          <td>
            <?php
              $beli = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_lengkap, alamat FROM tbl_user WHERE nik = '$pembeli'"));
              echo $beli['alamat'];
             ?>
          </td>
        </tr>
        <tr>
          <td>
            Tanggal Deal
          </td>
          <td>
            :
          </td>
          <td>
            <?php
            echo tgl_indo(date('Y-m-d', strtotime($tgl)));
             ?>
          </td>
        </tr>
      </table>
    <!-- end of pembeli section -->
  <br>
  <br>
  <!-- detail kayu -->
    <center>
      <table border="1px">
        <tr>
          <th width="150px">
            Nama Kayu
          </th>
          <th width="100px">
            Jenis
          </th>
          <th width="300px">
            Alamat Kebun
          </th>
          <th width="200px">
            Harga
          </th>
          <th width="450px">
            Keterangan
          </th>
        </tr>
        <tr>
          <?php
            $akayu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$kdky'"));
            $jenis =  $akayu['nama_kayu'];
           ?>
          <td>
            <?php
              $nkayu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_kayu FROM tbl_jenis WHERE id_jenis = '$jenis'"));
              echo $nkayu['nama_kayu'];
             ?>
          </td>
          <td>
            <?php
              echo $akayu['jenis_kayu'];
             ?>
          </td>
          <td>
            <?php
              echo $akayu['alamat_kebun'];
             ?>
          </td>
          <td>
            <?php
              echo rupiah($akayu['harga']);
             ?>
          </td>
          <td>
            <?php
              echo $akayu['deskripsi'];
             ?>
          </td>
        </tr>
      </table>

    </center>
    <!-- end of detail kayu -->

  </body>
  <script>
    window.print();
  </script>
</html>
