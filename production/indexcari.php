<?php
session_start();

include 'koneksi.php';

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

     <body class="nav-md">
    <?php
      if($_SESSION['status']!="login"){
          header("location:loregpembeli.php?pesan=belum_login");
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
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="pembeli/index.php"><i class="fa fa-home"></i> Home</a>
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
                    <li><a href="javascript:;"> Profile</a></li>
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
                <li class="">
                  <form action="indexcari.php" method="post">
                  <input type="text" id="searchquery" size="60" name="keyword" placeholder="Search..." />
                  <input type="submit" id="searchbutton" value="Search" name="Search" class="formbutton" />
                  </form>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
<?php
//koneksi
$koneksi = new mysqli('localhost','root','','sijuka');
if (isset($_POST['Search'])){
    //variable
    $keyword = $_POST['keyword'];
    $query = $koneksi->query("SELECT j.*, k.* FROM tbl_kayu k, tbl_jenis j
      WHERE (k.status = 'belum laku' AND j.id_jenis=k.nama_kayu AND j.nama_kayu LIKE '%$keyword%') OR
            (k.status = 'belum laku' AND j.id_jenis=k.nama_kayu AND k.jenis_kayu LIKE '%$keyword%') OR
            (k.status = 'belum laku' AND j.id_jenis=k.nama_kayu AND k.alamat_kebun LIKE '$keyword') OR
            (k.status = 'belum laku' AND j.id_jenis=k.nama_kayu AND k.deskripsi LIKE '$keyword')");
    $row = mysqli_num_rows($query);
    //cek apakah ada satu
    if ($row==0){
        ?>
        <center><h3> 404 NOT FOUND</h3></center>
        <?php
    }
    else{
        ?>
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>
            <div class="container" >
    <br><br>
        <center><h3>Menampilkan hasil dari "<?php echo $keyword;?>" .</h3></center> <br>

<?php
foreach ($query as $rows){
        $kode_kayu = $rows['kode_kayu'];
        $nama_kayu = $rows['nama_kayu'];
        $jenis_kayu = $rows['jenis_kayu'];
        $alamat_kebun = $rows['alamat_kebun'];
        $deskripsi = $rows['deskripsi'];
        ?>
  <!--<div class="col-md-12 col-sm-12 col-xs-12">-->
  <div class="container">
    <div class="row">
      <div class="container">
        <div class="col-md-6">

          <a href="detailkayu.php?kayu=<?php echo $kode_kayu?>">
            <!-- <img class="img-fluid rounded mb-3 mb-md-0 mb-md" src="images/1.ico" alt="" width="500px"> -->
            <?php
            include 'koneksi.php';
               // $orang = $kode_kayu;
               $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$kode_kayu'");
               while($d = mysqli_fetch_array($pp)){
                       ?>
                          <tr>
                                <td>

                                       <img src="<?php echo "foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="450px" height="250px">
                                 </td>
                           </tr>
            <?php } ?>

      </a>
        </div>
        <!-- <div class="col-md-4"> -->
          <h3> <?php
            $kayu =mysqli_query($koneksi, "SELECT nama_kayu FROM tbl_jenis WHERE id_jenis = '$nama_kayu'");
            while($c = mysqli_fetch_array($kayu)){
              echo $c['nama_kayu'];
            }
            echo " - ";
            echo  $jenis_kayu;
           ?> </h3>

          <p class="main"> <?php echo  $deskripsi; ?> </p>
          <a class="btn btn-primary" href="detailkayu.php?kayu=<?php echo $kode_kayu?>">Lihat Detail</a>
        <!-- </div> -->
      </div>
    </div>
    </div>
      <!-- /.row -->

      <hr>
        <?php
        }
        ?>
        </table>
<!--        <?php
    }
}
?>

  <!-- Pagination -->
      <center><ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

     </div><br>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SIJUKA © 2018
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
