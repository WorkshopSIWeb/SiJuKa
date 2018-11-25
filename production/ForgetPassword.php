<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sisjuka Admin | Lupa Password</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../build/css/custom.min.css" rel="stylesheet">

	 <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

  </head>

  <body class="bg-white">

<div>
<a class="hiddenanchor" id="Reset Password"></a>




    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-body">
          <div class="text-center mb-4">
           <img src=sijuka.png height="100px"align="center"/>
			<h4>Lupa Password?</h4>

            <p>masukan email untuk merubah password</p>
          </div>
          <form action="cek_lupapassword.php" class="inner-login" method="post" onSubmit="return validate_password_reset();">

					<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Masukan Username" autofocus="autofocus" required="required" style="width: 300px; margin-right: auto; margin-left: auto;">

					</div>

            <div class="form-line">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukan alamat email" required="required" autofocus="autofocus" style="width: 300px; margin-right: auto; margin-left: auto;">

              </div>
            </div><br>
            <center>
            <input type="submit"  class="btn btn-primary" value="Kirim">
          </center>

          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="">daftar akun</a>
            <a class="d-block small" href="loregpembeli.html">halaman login</a>
			   <div>

                   <p>©2018 All Rights Reserved. SIJUKA. Privacy and Terms</p>

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
