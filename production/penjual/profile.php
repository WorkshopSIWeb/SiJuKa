<?php
session_start();

include '../php/rupiah.php';
include '../koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="../images/IMG-20181016-WA0004.jpg" type="image/ico" />

    <title>SIJUKA</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <?php
    $orang = $_SESSION['username'];
    $al = mysqli_query($koneksi, "SELECT jabatan FROM tbl_user WHERE username='$orang'");
    while ($row = $al->fetch_assoc()) {
    // echo $row['jabatan']."<br
    }
        ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"></i> <span>SIJUKA</span></a>
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
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a href="posting_kayu.php"><i class="fa fa-edit"></i> Posting Kayu</a>
                  </li>
                  <li><a href="setting.php"><i class="fa fa-cogs"></i> Pengaturan </a>

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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="production/login.php">
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
                    <table>
                     <?php
                        $orang = $_SESSION['username'];
                        $data = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$orang'");
                        while($d = mysqli_fetch_array($data)){
                                ?>
                                   <tr>
                                         <td>
                                                <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>" width="50" height="50">
                                          </td>
                                          <td>
                                            <?php echo $_SESSION['username']?>
                                            <span class=" fa fa-angle-down"></span>
                  </a>
                                          </td>
                                    </tr>
                     <?php } ?>
                  </table>
                  <!-- </a> -->
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Pengaturan</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Bantuan</a></li>
                    <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
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
                          <span>Alex Rudi herlambang</span>
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
                          <span>Ahmad Munir</span>
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
                          <span>Dheni teguh Pramono</span>
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
                          <span>Firmansyah Wahyu Maulana</span>
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
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profil</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <!-- <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar"> -->
                          <?php
                             $orang = $_SESSION['username'];
                             $pp = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$orang'");
                             while($d = mysqli_fetch_array($pp)){
                                     ?>
                                        <tr>
                                              <td>
                                                     <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>" class="img-responsive avatar-vew" alt="avatar">
                                               </td>
                                         </tr>
                          <?php } ?>
                        </div>
                      </div>
                      <h3><?php
                          // include 'koneksi.php';
                          echo $_SESSION['username'];
                      ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i>
                          <?
                          $al = mysqli_query($koneksi, "SELECT alamat FROM tbl_user WHERE username='$orang'");
                          while ($row = $al->fetch_assoc()) {
                          echo $row['alamat']."<br>";
                          }
                          ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i>
                          <?php
                          $al = mysqli_query($koneksi, "SELECT pekerjaan FROM tbl_user WHERE username='$orang'");
                          while ($row = $al->fetch_assoc()) {
                          echo $row['pekerjaan']."<br>";
                          }
                          ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success" href="edit_profil.php"><i class="fa fa-edit m-right-xs"></i>Edit Profil</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="12"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Detail Profil</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Daftar kayu anda</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
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
                                $al = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nik']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap  </td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT nama_lengkap FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['nama_lengkap']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT tgl_lahir FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['tgl_lahir']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT alamat FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['alamat']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT no_telepon FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['no_telepon']."<br>";
                                } ?></td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?php
                                $al = mysqli_query($koneksi, "SELECT email FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                echo $row['email']."<br>";
                                } ?></td>
                              </tr>
                            </table>
                          </h4>
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start tbl_kayu -->
                            <table class="data table table-striped no-margin">

                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Kayu</th>
                                  <th>Jenis Kayu</th>
                                  <th>Alamat Kebun</th>
                                  <th>Deskripsi</th>
                                  <th>Tgl Upload</th>
                                  <th>Status</th>
                                  <th>Harga</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                $al = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'");
                                while ($row = $al->fetch_assoc()) {
                                $pemilik = $row['nik'];}

                                $sql="SELECT  tbl_kayu.*, tbl_jenis.* FROM tbl_kayu, tbl_jenis WHERE tbl_kayu.nama_kayu = tbl_jenis.id_jenis AND tbl_kayu.nik= '$pemilik'";
                                $no=1;
                                if (!$result=  mysqli_query($koneksi, $sql)){
                                die('Error:'.mysqli_error($koneksi));
                                }  else {
                                if (mysqli_num_rows($result)> 0){
                                while ($row=  mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                <td><?php echo $no ;?></td>
                                <td><?php echo $row['nama_kayu'];?></td>
                                <td><?php echo $row['jenis_kayu'];?></td>
                                <td><?php echo $row['alamat_kebun'];?></td>
                                <td><?php echo $row['deskripsi'];?></td>
                                <td><?php echo $row['tanggal_upload'];?></td>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo rupiah($row['harga']);?></td>
                                </tr>

                                <?php
                                  $no++;
                                  }
                                  }  else {
                                     echo '';
                                     }
                                  }?>
                              </tbody>
                            </table>
                            <!-- end tbl_kayu -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
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
           SIJUKA</br><a href="https://colorlib.com"></br>Copyright@2018</a>
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
    <!-- Chart.js -->
    <script src="../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../vendors/moment/min/moment.min.js"></script>
    <script src="../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>

  </body>
</html>
