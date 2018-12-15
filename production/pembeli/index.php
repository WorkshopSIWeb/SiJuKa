<?php
  session_start();
  include '../koneksi.php';
  include '../php/rupiah.php';
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIJUKA | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SIJUKA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <form action="../indexcari.php" method="post">
                <input type="text" id="searchquery" width="40" height="5" name="keyword" placeholder="Search..." />
                <input type="submit" id="searchbutton" value="Search" name="Search" class="formbutton" />
              </form>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">


          <h1 class="my-4">Shop Name</h1>
         <div class="list-group">
           <a href="#" class="list-group-item">Category 1</a>
           <a href="#" class="list-group-item">Category 2</a>
           <a href="#" class="list-group-item">Category 3</a>
</div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">

                <?php
                    $pic1 = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE status != 'laku' ORDER BY kode_kayu DESC LIMIT 1 OFFSET 2 ");
                    while($d = mysqli_fetch_array($pic1)){
                            ?>
                               <tr>
                                     <td>
                                       <?php $ky = $d['kode_kayu']; ?>
                                        <a href="../detailkayu.php?kayu=<?php echo $ky;?>">
                                            <img src="<?php echo "../foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="900" height="350">
                                            <style>
                                              #judul{

                                                position: absolute;
                                                top: 260px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                              #judul2{

                                                position: absolute;
                                                top: 290px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                            </style>
                                            <?php
                                            $kq = $d['nama_kayu'];
                                            $ss=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_jenis WHERE id_jenis = '$kq'")); ?>
                                            <h4 id="judul"><?php echo $ss['nama_kayu']; echo " - "; echo $d['jenis_kayu'];?></h4>
                                            <br>
                                            <h5 id="judul2"><?php echo rupiah($d['harga']);?></h5>
                                        </a>
                                      </td>
                                </tr>
                 <?php } ?>

              </div>
              <div class="carousel-item">
                <?php
                    $pic1 = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE status != 'laku' ORDER BY kode_kayu DESC LIMIT 1 OFFSET 1 ");
                    while($d = mysqli_fetch_array($pic1)){
                            ?>
                               <tr>
                                     <td>
                                       <?php $ky = $d['kode_kayu']; ?>
                                        <a href="../detailkayu.php?kayu=<?php echo $ky;?>">
                                            <img src="<?php echo "../foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="900" height="350">
                                            <style>
                                              #judul{

                                                position: absolute;
                                                top: 260px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                              #judul2{

                                                position: absolute;
                                                top: 290px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                            </style>
                                            <?php
                                            $kq = $d['nama_kayu'];
                                            $ss=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_jenis WHERE id_jenis = '$kq'")); ?>
                                            <h4 id="judul"><?php echo $ss['nama_kayu']; echo " - "; echo $d['jenis_kayu'];?></h4>
                                            <br>
                                            <h5 id="judul2"><?php echo rupiah($d['harga']);?></h5>
                                        </a>
                                      </td>
                                </tr>
                 <?php } ?>
              </div>
              <div class="carousel-item">
                <?php
                    $pic1 = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE status != 'laku' ORDER BY kode_kayu DESC LIMIT 1");
                    while($d = mysqli_fetch_array($pic1)){
                            ?>
                               <tr>
                                     <td>
                                       <?php $ky = $d['kode_kayu']; ?>
                                        <a href="../detailkayu.php?kayu=<?php echo $ky;?>">
                                            <img src="<?php echo "../foto_kayu/foto1/".$d['foto_1']; ?>" class="img-responsive avatar-vew" alt="avatar" width="900" height="350">
                                            <style>
                                              #judul{

                                                position: absolute;
                                                top: 260px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                              #judul2{

                                                position: absolute;
                                                top: 290px;
                                                right: 10px;
                                                z-index: 2;
                                                color: rgb(0, 0, 0);
                                                background-color: rgba(255, 255, 255, 0.63);

                                              }
                                            </style>
                                            <?php
                                            $kq = $d['nama_kayu'];
                                            $ss=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbl_jenis WHERE id_jenis = '$kq'")); ?>
                                            <h4 id="judul"><?php echo $ss['nama_kayu']; echo " - "; echo $d['jenis_kayu'];?></h4>
                                            <br>
                                            <h5 id="judul2"><?php echo rupiah($d['harga']);?></h5>
                                        </a>
                                      </td>
                                </tr>
                 <?php } ?>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            <?php

                //variable

                $query = mysqli_query ($koneksi, "SELECT * FROM tbl_kayu WHERE status != 'laku' ORDER BY kode_kayu DESC");

                $row = mysqli_num_rows($query);
                //cek apakah ada satu
                if ($row==0){
                    ?>
                    <center><h3> 404 NOT FOUND</h3></center>
                    <?php
                }
                else{
                  foreach ($query as $rows){
                          $kode_kayu = $rows['kode_kayu'];
                          $nama_kayu = $rows['nama_kayu'];
                          $jenis_kayu = $rows['jenis_kayu'];
                          $alamat_kebun = $rows['alamat_kebun'];
                          $deskripsi = $rows['deskripsi'];
                          $harga = $rows['harga'];
                    ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="../detailkayu.php?kayu=<?php echo $kode_kayu?>">
                  <?php
                  // include '..koneksi.php';
                     // $orang = $kode_kayu;
                     $pp = mysqli_query($koneksi, "SELECT * FROM tbl_kayu WHERE kode_kayu = '$kode_kayu'");
                     while($d = mysqli_fetch_array($pp)){
                             ?>
                                <tr>
                                      <td>
                                             <img src="<?php echo "../foto_kayu/foto1/".$d['foto_1']; ?>" class="card-img-top" width="253" height="142" alt="avatar">
                                       </td>
                                 </tr>
                  <?php } ?>
                  <!-- <img class="card-img-top" src="http://placehold.it/700x400" alt=""> -->
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="../detailkayu.php?kayu=<?php echo $kode_kayu?>"><?php
                      $kayu =mysqli_query($koneksi, "SELECT nama_kayu FROM tbl_jenis WHERE id_jenis = '$nama_kayu'");
                      while($c = mysqli_fetch_array($kayu)){
                        echo $c['nama_kayu'];
                      }
                      echo " - ";
                      echo  $jenis_kayu;
                     ?></a>
                  </h4>
                  <h5><?php echo rupiah($harga);?></h5>
                  <small><p class="card-text"><?php echo $deskripsi;?></p></small>
                </div>
              </div>
            </div>
            <?php
          }}
            ?>
<!--
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div> -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
