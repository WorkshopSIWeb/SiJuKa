<?php
  session_start();

  include '../koneksi.php';

?>
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

  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"> <span>SIJUKA</span></a>
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
                  <h2>Daftar mau DEAL</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li>
                      <div class="col-lg-6">
                    </li>
                    <li>
                      <div class="col-lg-7">
                    </li>
                    <li>
                      <div class="col-lg-7">
                    </li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- pagecontent -->
                  <?php
                    $orang = $_SESSION['username'];
                  	$data = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'") ;
                  	while ($d = mysqli_fetch_array($data)) {
                  	    $id = $d['nik'];
                  	    $qm = mysqli_query($koneksi, "SELECT * FROM tbl_user where nik = '$id'");
                  	    while ($dt = mysqli_fetch_array($qm)){
                  	      $anjay = $dt['nik'];}}

                  	$id_member = $anjay;
                   ?>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr class="top_inbox">
                      <th>
                        <center>
                        Pengirim
                        </center>
                      </th>
                      <th>
                        <center>
                        Subyek Pesan
                        </center>
                      </th>
                      <th>
                        <center>
                        Waktu
                        </center>
                      </th>
                      <th>
                        <center>
                        Eksekusi
                      </center>
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                  <?php
                  $query_daftar_pesan = mysqli_query($koneksi, "SELECT DISTINCT P.*, M.nik, M.nama_lengkap FROM pesan P, tbl_user M WHERE P.id_pengirim=M.nik AND P.id_penerima='$id_member' AND subyek_pesan = 'BOOKING KAYU' ORDER BY P.id_pesan DESC");
                  while ($daftar_pesan=mysqli_fetch_array($query_daftar_pesan)) {
                    if($daftar_pesan['sudah_dibaca']=="belum"){
                  ?>
                    <tr class="pesan pesan_belum">
                      <td>
                        <?php echo $daftar_pesan['nama_lengkap']; ?>
                      </td>
                      <td>
                        <a href="buka_deal.php?id_pembeli=<?php echo $daftar_pesan['id_pengirim']; ?>&id_pesan=<?php echo $daftar_pesan['id_pesan']; ?>"><?php echo $daftar_pesan['subyek_pesan']; ?></a>
                      </td>
                      <td>
                        <?php echo $daftar_pesan['tanggal']; ?>
                      </td>
                    </tr>
                  <?php }
                    else if($daftar_pesan['sudah_dibaca']=="sudah"){
                  ?>
                    <tr class="pesan">
                      <td>
                        <?php echo $daftar_pesan['nama_lengkap']; ?>
                      </td>
                      <td>
                        <a href="buka_deal.php?id_pembeli=<?php echo $daftar_pesan['id_pengirim']; ?>&id_pesan=<?php echo $daftar_pesan['id_pesan']; ?>"><?php echo $daftar_pesan['subyek_pesan']; ?></a>
                      </td>
                      <td>
                        <?php echo $daftar_pesan['tanggal']; ?>
                      </td>
                      <td>
                        <center>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalyakin">DEAL!</button>
                      </center>
                      </td>
                    </tr>

                  <?php
                    }
                  }
                  ?>

                    </tbody>
                  </table>

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

 <!-- MODAL -->
 <div id="modalyakin" class="modal fade" role="dialog">
   <div class="modal-dialog">
     <!-- isi modal -->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title"> Yakin deal ? </h4>
       </div>
       <form action="php/deal.php" method="post" enctype="multipart/form-data">
       <div class="modal-body">
         Apakah anda yakin untuk deal dengan  <?php echo $daftar_pesan['nama_lengkap'];?>?
        </div>
       <div class="modal-footer">
         <input type="submit" class="btn btn-default"  value="DEAL">
       </div>
     </form>
     </div>
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
