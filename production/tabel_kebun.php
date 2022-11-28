<?php
session_start();

include 'koneksi.php';
include 'php/cek_user.php';
include 'php/rupiah.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/IMG-20181016-WA0004.jpg" type="image/ico" />

    <title>Si_Juka | Sistem Informasi Penjualan Kayu Online Terlengkap </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php
    $orang = $_SESSION['username'];
    $al = mysqli_query($koneksi, "SELECT jabatan FROM tbl_user WHERE username='$orang'");
    while ($row = $al->fetch_assoc()) {
    }
      if($_SESSION['status']!="login"){
          header("location:loregpembeli.php?pesan=belum_login");
        }
    if ($_SESSION['jabatan'] != 'admin') {
          header("location:loregpembeli.php?pesan=bukan_admin");
        }
        ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"></i> <span>Si-Juka</span></a>
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
                                                <img src="<?php echo "foto_profil/".$d['foto_profil']; ?>" class="img-circle profile_img" width="50" height="50">
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
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home</a>
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
                                                <img src="<?php echo "foto_profil/".$d['foto_profil']; ?>" width="50" height="50">
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
                    <li><a href="profile.php"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Pengaturan</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Bantuan</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
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
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Kebun <small>Pembeli</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Berikut Tabel Daftar Kebun Dari Si-Juka
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>

                          <th>Nama Kayu</th>

                          <th>Alamat Kebun</th>
                          <th>Deskripsi</th>
                          <th>Tanggal Upload</th>
                          <th>Harga</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql="SELECT  * FROM tbl_kayu";
                        $no=1;
                        if (!$result=  mysqli_query($koneksi, $sql)){
                        die('Error:'.mysqli_error($koneksi));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                        ?>
                        <td><?php echo $no ;?></td>

                        <td><?php
                          $kode = $row['kode_kayu'];
                          $ky = mysqli_fetch_array(mysqli_query($koneksi, "SELECT  tbl_kayu.*, tbl_jenis.* FROM tbl_kayu, tbl_jenis WHERE kode_kayu ='$kode'"));
                          echo $ky['nama_kayu'];
                          echo " - ";
                          echo $ky['jenis_kayu'];
                        ?></td>

                        <td><?php echo $row['alamat_kebun'];?></td>
                        <td><?php echo $row['deskripsi'];?></td>
                        <td><?php echo $row['tanggal_upload'];?></td>
                        <td>
                          <?php
                            $hrg = $row['harga'];
                            echo rupiah($hrg);
                          ?>
                        </td>
                        <td>
                          <a href="edit_kebun.php?kode_kayu=<?php echo $row['kode_kayu']; ?>" class="btn btn-info"><li class="fa fa-pencil"></li> Edit</a>
                          <a href="php/delete_data_kayu.php?kode_kayu=<?php echo $row['kode_kayu']; ?>" method="post" class="btn btn-danger" onclick="return konfirmasi()" href="#"><li class="fa fa-trash-o"></li> Hapus</a>
                        </td>
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
           Si-Juka | Sistem Informasi Penjualan Kayu Online Terlengkap </br><a href="https://colorlib.com"></br>Copyright@2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      <!-- </div>
    </div> -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" language="JavaScript">
    function konfirmasi()
    {
    tanya = confirm("Anda Yakin Akan Menghapus Data Tersebut ???");
    if (tanya == true) return true;
    else return false;
    }</script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
