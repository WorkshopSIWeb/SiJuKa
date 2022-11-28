<?php
  session_start();

  include '../koneksi.php';

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
                  <li><a href="index2.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <?php
                  $nik = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'"));
                  ?>
                  <li><a href="../chat/index.php?id=<?php echo $nik['nik']; ?>"><i class="fa fa-comment-o"></i> Chat</a>
                  </li>
                  <li><a href="penawaran.php"><i class="fa fa-edit"></i> Daftar booking mu</a>
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
                    <h2>Profil</h2>
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
                    <?php
                    $data = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'") ;
                    while ($d = mysqli_fetch_array($data)) {
                        $id = $d['nik'];
                        $qm = mysqli_query($koneksi, "SELECT * FROM tbl_user where nik = '$id'");
                        while ($dt = mysqli_fetch_array($qm)){
                     ?>

                    <form class="form-horizontal form-label-left" action="../php/update_profil.php" method="post">
                      <div class="item form-group">
                        <input type="hidden" name="nik" value="<?php echo $dt['nik'];?>">
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" name="nama_lengkap" value="<?php echo $dt['nama_lengkap'] ?>" class="form-control col-md-7 col-xs-12" placeholder="Nama Lengkap" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="date" name="tanggal_lahir" value="<?php echo $dt['tgl_lahir'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="address" name="alamat" value="<?php echo $dt['alamat'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nomor Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="number" name="no_telepon" value="<?php echo $dt['no_telepon'] ?>" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="email" name="email" value="<?php echo $dt['email'] ?>" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan">Pekerjaan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="pekerjaan" value="<?php echo $dt['pekerjaan'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis kelamin
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="jenis_kelamin" class="select2_single form-control" tabindex="-1" >
                              <option disabled="disabled" hidden="yes"><?php echo $dt['jenis_kelamin']; ?></option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                              <option value="Lain-lain">Lain-lain</option>
                            </select>
                          </div>
                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Batal</button>
                          <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                      </div>
                    </form>
                  <?php } }?>
                  </div>
                </div>


                <!-- informasi akun --><div class="x_panel">
                  <div class="x_title">
                    <h2>Informasi Akun</h2>
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
                    <?php
                    $data = mysqli_query($koneksi, "SELECT nik FROM tbl_user WHERE username='$orang'") ;
                    while ($d = mysqli_fetch_array($data)) {
                        $id = $d['nik'];
                        $qm = mysqli_query($koneksi, "SELECT * FROM tbl_user where nik = '$id'");
                        while ($dt = mysqli_fetch_array($qm)){
                     ?>

                    <form class="form-horizontal form-label-left" action="../php/update_akun.php" method="post">
                      <div class="item form-group">
                        <input type="hidden" name="nik" value="<?php echo $dt['nik'];?>">
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" name="username" value="<?php echo $dt['username'] ?>" class="form-control col-md-7 col-xs-12" placeholder="Username" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password" class="form-password form-control col-md-7 col-xs-12" name="password" value="<?php echo $dt['password'] ?>" required="required" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Validasi Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password" class="form-password form-control col-md-7 col-xs-12" name="repassword" required="required">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-0"></div>
                        <div class="col-lg-6">
                        <input type="checkbox" class="form-checkbox">Tampilkan Password
                      </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                      </div>
                    </form>
                  <?php } }?>
                  </div>
                </div>

                <!-- /informasi akun -->
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

  <script type="text/javascript">
    $(document).ready(function(){
      $('.form-checkbox').click(function(){
        if($(this).is(':checked')){
          $('.form-password').attr('type','text');
        }else{
          $('.form-password').attr('type','password');
        }
      });
    });
  </script>

</html>
