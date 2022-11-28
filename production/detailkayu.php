<?php
session_start();

include 'koneksi.php';
include 'php/rupiah.php';
include 'php/cek_pembeli.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
                <table>
                     <?php
                        $orang = $_SESSION['username'];
                        $data = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$orang'");
                        while ($d = mysqli_fetch_array($data)) {
                            ?>
                                   <tr>
                                         <td>
                                                <img src="<?php echo "foto_profil/".$d['foto_profil']; ?>" class="img-circle profile_img" width="50" height="50">
                                          </td>
                                    </tr>
                     <?php
                        } ?>
                  </table>
              </div>
              <div class="profile_info">
                <span>Selamat Datang</span>
                <h2>
                  <?php
                      echo  $_SESSION['username'];
                  ?>
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="pembeli/index2.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a href="pembeli/penawaran.php"><i class="fa fa-edit"></i> Daftar Permintaan</a>
                  </li>
                  <li><a href="pembeli/setting.php"><i class="fa fa-cogs"></i> Pengaturan </a>

                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">


                         <?php
                            $orang = $_SESSION['username'];
                            $data = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$orang'");
                            while ($d = mysqli_fetch_array($data)) {
                                ?>
                                       <tr>
                                             <td>
                                                    <img src="<?php echo "foto_profil/".$d['foto_profil']; ?>"  width="50" height="50">
                                              </td>
                                        </tr>
                         <?php
                            }

                             echo  $_SESSION['username'];

                         ?>


                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <!-- mengambil kode kayu -->
                  <?php
                    $id = $_GET['kayu'];
                   ?>

                  <div class="x_content">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                      <div class="product-image">
                  <!-- memanggil foto1 -->
                      <?php
                        $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                        while ($d = mysqli_fetch_array($pp)) {
                            ?>
                                   <tr>
                                         <td>

                                                <img src="<?php echo "foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="450px" height="250px">
                                          </td>
                                    </tr>
                     <?php
                        } ?>
                      </div>
                      <div class="product_gallery">
                        <a>
                          <?php
                            $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                            while ($d = mysqli_fetch_array($pp)) {
                                ?>
                                       <tr>
                                             <td>

                                                    <img src="<?php echo "foto_kayu/foto2/".$d['foto_2']; ?>"  alt="avatar">
                                              </td>
                                        </tr>
                         <?php
                            } ?>
                        </a>
                          <a>
                            <?php
                              $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                              while ($d = mysqli_fetch_array($pp)) {
                                  ?>
                                         <tr>
                                               <td>

                                                      <img src="<?php echo "foto_kayu/foto3/".$d['foto_3']; ?>"  alt="avatar">
                                                </td>
                                          </tr>
                           <?php
                              } ?>
                        </a>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Kayu
                      <?php
                      $al = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                      while ($row = $al->fetch_assoc()) {
                          $nama_kayu = $row['nama_kayu'];
                      }

                        $kayu =mysqli_query($koneksi, "SELECT nama_kayu FROM tbl_jenis WHERE id_jenis = '$nama_kayu'");
                        while ($c = mysqli_fetch_array($kayu)) {
                            echo $c['nama_kayu'];
                        }
                        echo " - ";
                        $al = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                        while ($row = $al->fetch_assoc()) {
                            echo $row['jenis_kayu'];
                        }
                       ?>
                      </h3>
                      <h5>Keterangan : </h5>
                      <p><?php   $al = mysqli_query($koneksi, "SELECT deskripsi FROM tbl_kayu WHERE kode_kayu = '$id'");
                        while ($row = $al->fetch_assoc()) {
                            echo $row['deskripsi'];
                        } ?></p>
                      <br />

                      <div class="">
                        <h2>Lokasi : <?php   $al = mysqli_query($koneksi, "SELECT alamat_kebun FROM tbl_kayu WHERE kode_kayu = '$id'");
                            while ($row = $al->fetch_assoc()) {
                                echo $row['alamat_kebun'];
                            } ?></h2>
                      </div>

                      <br />


                      <div class="">
                        <div class="product_price">
                          <h3>Harga</h3>
                          <h1 class="price"><?php $al = mysqli_query($koneksi, "SELECT harga FROM tbl_kayu WHERE kode_kayu = '$id'");
                            while ($row = $al->fetch_assoc()) {
                                $hrg =  $row['harga'];
                            }
                          echo rupiah($hrg);
                          ?></h1>
                        </div>
                      </div>

                      <div class="">
                        <!-- <input type="button" class="btn btn-default btn-lg" value="Booking kayu"> -->
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalbooking">Booking Kayu</button>
                        <!-- <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalkontak">Kontak Penjual</button> -->
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modallapor">Laporkan Pemilik kayu</button>
                      </div>
                      <h4>Hubungi Penjual :</h4>
                      <div class="product_social">
                        <ul class="list-inline">
                          <?php $al = mysqli_query($koneksi, "SELECT nik FROM tbl_kayu WHERE kode_kayu = '$id'");
                            while ($row = $al->fetch_assoc()) {
                                $p =  $row['nik'];
                            }
                          ?>
                          <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalchat">Chat</button>
                          </li>
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                          </li>
                          <li><a href="#"><i class="fa fa-rss-square"></i></a>
                          </li>
                        </ul>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
    <script src="../vendors/jquery/dist/jquery.js"></script>
    <!-- Bootstrap -->
    <!-- <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>


    <!-- modal booking -->
    <div id="modalbooking" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- isi modal -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> Booking kayu </h4>
          </div>
          <form action="php/booking.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <?php
              $al = mysqli_query($koneksi, "SELECT nik FROM tbl_kayu WHERE kode_kayu = '$id'");
              while ($row = $al->fetch_assoc()) {
                  $nikpemilik = $row['nik'];
              }
             ?>
            <input type="hidden" name="pemilik" value='<?php echo $nikpemilik;?>'>
            <?php
              $orang = $_SESSION['username'];
              $as = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username = '$orang'");
              while ($row = $as->fetch_assoc()) {
                  $nikpemesan = $row['nik'];
              }
             ?>
            <input type="hidden" name="pemesan" value='<?php echo $nikpemesan;?>'>
            <input type="hidden" name="kode_kayu" value='<?php echo $id;?>'>
            <p> Segera proses kelanjutannya dengan cara menghubungi pemilik kayu.</p>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-default"  value="booking">
          </div>
        </form>
        </div>
      </div>
    </div>

    <!-- modallapor -->
    <div id="modallapor" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- isi modal -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> Laporkan Pemilik Kayu </h4>
          </div>
          <form action="pembeli/form_Laporkan.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <?php
              $al = mysqli_query($koneksi, "SELECT nik FROM tbl_kayu WHERE kode_kayu = '$id'");
              while ($row = $al->fetch_assoc()) {
                  $nikdilapor = $row['nik'];
              }
             ?>
            <input type="hidden" name="dilapor" value='<?php echo $nikdilapor;?>'>
            <?php
              $orang = $_SESSION['username'];
              $as = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username = '$orang'");
              while ($row = $as->fetch_assoc()) {
                  $nikpelapor = $row['nik'];
              }
             ?>
            <input type="hidden" name="pelapor" value='<?php echo $nikpelapor;?>'>

            <p> Anda ingin melaporkan pemilik kayu ini?</p>
          </div>
          <div class="modal-footer" height="20px">
            <input type="submit" class="btn btn-danger"  value="Laporkan">
          </div>
        </form>
        </div>
      </div>
    </div>

    <!-- modal chat -->
    <div id="modalchat" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- isi modal -->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> Chat pemilik kayu</h4>
          </div>
          <form action="php/chat.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" name="pengirim" value='<?php echo $nikpelapor;?>'>
            <?php
              $al = mysqli_query($koneksi, "SELECT nik FROM tbl_kayu WHERE kode_kayu = '$id'");
              while ($row = $al->fetch_assoc()) {
                  $nikpemilik = $row['nik'];
              }
             ?>
            <input type="hidden" name="penerima" value='<?php echo $nikpemilik;?>'>
            <h4>Pesan apa yg anda kirimkan kepada pemilik kayu??</h4>
            <input type="text" name="chat" class="form-control" placeholder="Isi pesan di sini">

          <div class="modal-footer">
            <input type="submit" class="btn btn-default"  value="Kirimkan">
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
