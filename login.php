<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="production/images/IMG-20181016-WA0004.jpg" type="image/ico" />

    <title>Login | SISJUKA </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
   <body class="login">
        <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <form action="ceklogin.php" method="POST" name="login">
          <section class="login_content">
            <form>
              <h1>Form Login</h1>
              <h4>Silahkan Masukkan Username dan Password</h4>
              <form action="login.php" method="post" onSubmit="return validasi()">
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" class="button">Log in</a>
                <!-- <a class="reset_pass" href="production/Forget Password.html">Lupa Password???</a> -->
              </div>
              <div>
                <a class="btn btn-default submit" href="production/Forget Password.html">Lupa Pasword...???</a>
                <!-- <a class="reset_pass" href="production/Forget Password.html">Lupa Password???</a> -->
              </div>


              

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Belum Punya Akun?
                  <a href="#signup" class="to_register"> Buat Akun Baru disini </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sistem Informasi Penjualan Kayu </h1>
                  <p> ©2018 All Rights Reserved </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Buat Akun Baru</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Simpan</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Siap Menjadi Anggota ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sistem Informasi Penjualan Kayu </h1>
                  <p> ©2018 All Rights Reserved </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  <!-- <script type="text/javascript">
                  function validasi() {
                 var username = document.getElementById("username").value;
                 var password = document.getElementById("password").value;   
                 if (username != "" && password!="") {
                return true;
                }
                else{
                alert('Username dan Password harus di isi !');
                return false;}
                }
  </script> -->
</html>
