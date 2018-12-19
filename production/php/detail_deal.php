<?php
  session_start();

  include '../koneksi.php';
  include '../php/cek_user2.php';

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIJUKA | Pengaturan</title>
    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">

      <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <body class="nav-md">
    <?php
      if($_SESSION['status']!="login"){
          header("location:../loregpembeli.php?pesan=belum_login");
         }
        ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../index.php" class="site_title"> <span>SIJUKA</span></a>
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
                        while($d = mysqli_fetch_array($data)){
                                ?>
                                   <tr>
                                         <td>
                                                <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>" class="img-circle profile_img" width="50" height="50">
                                          </td>
                                    </tr>
                     <?php } ?>
                  </table>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
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
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../index.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Form Untuk Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_user.php">Tambah User</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Kelola Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tabel_user.php">Kelola  User</a></li>
                      <li><a href="tabel_kebun.php">Kelola Kayu</a></li>
                      <li><a href="tabel_transaksi.php">Kelola Transaksi</a></li>
                    </ul>
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
                       while($d = mysqli_fetch_array($data)){
                               ?>
                                  <tr>
                                        <td>
                                               <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>" width="50" height="50">
                                         </td>
                                   </tr>
                    <?php } ?>
                    <?php
                    echo $_SESSION['username'];
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
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                  <div class="x_title">
                    <h2>Detail Deal</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Informasi Kayu</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Informasi Pembeli</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Informasi Penjual</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <div class="col-md-7 col-sm-7 col-xs-12">
                              <div class="product-image">
                          <!-- memanggil foto1 -->
                              <?php
                              $id = $_GET['kayu'];
                                $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                                while($d = mysqli_fetch_array($pp)){
                                        ?>
                                           <tr>
                                                 <td>

                                                        <img src="<?php echo "../foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="450px" height="250px">
                                                  </td>
                                            </tr>
                             <?php } ?>
                              </div>
                              <div class="product_gallery">
                                <a>
                                  <?php
                                    $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                                    while($d = mysqli_fetch_array($pp)){
                                            ?>
                                               <tr>
                                                     <td>

                                                            <img src="<?php echo "../foto_kayu/foto2/".$d['foto_2']; ?>"  alt="avatar">
                                                      </td>
                                                </tr>
                                 <?php } ?>
                                </a>
                                  <a>
                                    <?php
                                      $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                                      while($d = mysqli_fetch_array($pp)){
                                              ?>
                                                 <tr>
                                                       <td>

                                                              <img src="<?php echo "../foto_kayu/foto3/".$d['foto_3']; ?>"  alt="avatar">
                                                        </td>
                                                  </tr>
                                   <?php } ?>
                                </a>
                              </div>
                            </div>

                            <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                              <h3 class="prod_title">Kayu
                              <?php
                              $al = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                              while ($row = $al->fetch_assoc()) {
                              $nama_kayu = $row['nama_kayu'];}

                                $kayu =mysqli_query($koneksi, "SELECT nama_kayu FROM tbl_jenis WHERE id_jenis = '$nama_kayu'");
                                while($c = mysqli_fetch_array($kayu)){
                                  echo $c['nama_kayu'];
                                }
                                echo " - ";
                                $al = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$id'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['jenis_kayu'];}
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
                                  <h1 class="price">IDR <?php $al = mysqli_query($koneksi, "SELECT harga FROM tbl_kayu WHERE kode_kayu = '$id'");
                                    while ($row = $al->fetch_assoc()) {
                                    echo $row['harga'];
                                  }?></h1>
                                </div>
                              </div>

                              <div class="">
                                <!-- <input type="button" class="btn btn-default btn-lg" value="Booking kayu"> -->
                                <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
                                <button type="button" class="btn btn-default btn-lg">Lanjutkan</button>
                              </a>
                                <!-- <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalkontak">Kontak Penjual</button> -->
                              </div>
                          </div>

                        </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            <?php
                              $pembeli = $_GET['beli'];
                              $jual = $_GET['jual'];
                             ?>
                            <!-- Informasi Pembeli -->
                            <h4>
                            <table>
                              <tr>
                                <th width="150px"> &nbsp; </th>
                                <th width="70px"> &nbsp; </th>
                                <th width="300px"> &nbsp; </th>
                              </tr>
                              <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nik']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap  </td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT nama_lengkap FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nama_lengkap']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT tgl_lahir FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['tgl_lahir']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT alamat FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['alamat']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT no_telepon FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['no_telepon']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT email FROM tbl_user WHERE nik='$pembeli'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['email']."<br>";
                                } ?></td>
                              </tr>
                            </table>

                          </h4>
                            <!-- end informasi pembeli -->
                            <div class="">
                              <!-- <input type="button" class="btn btn-default btn-lg" value="Booking kayu"> -->
                              <a href="#tab_content3" role="tab" data-toggle="tab" aria-expanded="false">
                              <button type="button" class="btn btn-default btn-lg">Lanjutkan</button>
                            </a>
                              <!-- <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalkontak">Kontak Penjual</button> -->
                            </div>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <h4>
                            <table>
                              <tr>
                                <th width="150px"> &nbsp; </th>
                                <th width="70px"> &nbsp; </th>
                                <th width="300px"> &nbsp; </th>
                              </tr>
                              <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nik']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap  </td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT nama_lengkap FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nama_lengkap']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT tgl_lahir FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['tgl_lahir']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT alamat FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['alamat']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT no_telepon FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['no_telepon']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT email FROM tbl_user WHERE nik='$jual'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['email']."<br>";
                                } ?></td>
                              </tr>
                            </table>

                          </h4>
                            <!-- end informasi pembeli -->
                          </div>
                        </div>
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
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->

    <script src="../../vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>

</html>
