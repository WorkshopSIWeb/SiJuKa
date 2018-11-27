<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="jquery.js"></script>
    <link rel="icon" href="images/IMG-20181016-WA0004.jpg" type="image/ico" />

    <script type="text/javascript" src="js/jquery.js"></script>


    <title>SIJUKA | LOGIN</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/stylelogin" type="text/css"> -->
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/stylelogin.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="login.php">
              <h1>Silahkan Login</h1>
              <div>
                <input type="text" name="username"class="form-control" placeholder="Username" required="required" />
              </div>
              <div class="form-password">
                <input type="password" name="password" class="form-password" placeholder="   Password" required="required" />
              </div>


              <div class="row">
                <div class="col-lg-0"></div>
                <div class="col-lg-6">
                <input type="checkbox" class="form-checkbox">Tampilkan Password
              </div>
              </div>
              <br>
            </table>
                <center>
              <table width="10px">
              <tr>
                <?php
              if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                  echo "<script>alert('Username atau password salah!'); window.location.href = 'loregpembeli.php';</script>";
                }else if($_GET['pesan'] == "logout"){
                  echo "<script>alert('Anda berhasil log out!'); window.location.href = 'loregpembeli.php';</script>";
                }else if($_GET['pesan'] == "belum_login"){
                  echo "<script>alert('Anda harus login dulu untuk mengakses halaman tersebut!'); window.location.href = 'loregpembeli.php';</script>";
                }else if ($_GET['pesan'] == "approve") {
                  echo "<script>alert('Pendaftaran Anda Berhasil, Silahkan Login untuk Masuk ke sistem'); window.location.href = 'loregpembeli.php';</script>";
                }else if ($_GET['pesan'] == "bukan_admin") {
                  echo "<script>alert('Anda bukan admin. Anda tidak seharusnya mengakses halaman ini!'); window.location.href = 'page_404.html';</script>";

                }
              }
              ?>
              </tr>
              <tr>
              <td><div>
                <input type="submit"  class="btn btn-primary" value="LOGIN">
                <!-- <a class="btn btn-primary" href="forgetpassword.html">Lupa Password??</a> -->
              </div></td>
            </table>
            <table>
              <tr><td><div >
                <a class="btn btn-primary submit" href="ForgetPassword.php">Lupa Pasword...???</a>
                <!-- <a class="reset_pass" href="production/Forget Password.html">Lupa Password???</a> -->
              </div></td>
            </tr>
          </table>
        </center>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Baru di sini ?
                  <a href="pilihan.html" class="to_register"> Buat Akun </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Sistem Informasi Penjualan Kayu </h1>
                  <p> ©2018 All Rights Reserved </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <img src="sijuka.png" width="80px" height="80px" />

      <form action="registerpembeli.php" method="post" enctype="multipart/form-data" >
        <!-- <form> -->
          <h1>Buat Akun</h1>
        <!-- </form> -->
            <div>
                <input type="text" name="nik" class="form-control" placeholder="NIK" required="required"/>
            </div>
            <div>
              <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required="required"/>
            </div>
            <div>
              <input type="text" name="tanggal_lahir" class="form-control" placeholder="tahun-bulan-tanggal" required="required"/>
            </div>
            <div>
              <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="required"/>
            </div>
            <div>
              <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon" required="required"/>
            </div>
            <div>
              <input id="email" type="text" name="email" class="form-control" placeholder="Email" required="required"/>
            </div>
			      <div>
              <input type="text" name="username" class="form-control" placeholder="Username" required="required"/>
            </div>
            <div>
              <input type="password" id="password" name="password" class="form-password" placeholder="  Password" required="required"/>
            </div>
            <div>
              <input type="password" id="password" name="repassword" class="form-password" placeholder="  Masukkan Kembali Password" required="required"/>
            </div>
            <div class="row">
              <div class="col-lg-0"></div>
              <div class="col-lg-6">
              <input type="checkbox" class="form-checkbox">Tampilkan Password
            </div>
            </div>
          <br>

      			     Upload Foto Profil
                    <input type="file" name="file" required="required"/>


            <div>

              <br>
                <input type="submit" name="upload" class="btn btn-primary" value="REGISTER">


                <div class="clearfix"></div>
                  <a href="loregpembeli.php">klik disini untuk login</a>
                <div>
                  <br>
                  <h1> SISJUKA </h1>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
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
