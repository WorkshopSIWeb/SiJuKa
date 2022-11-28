<?php
    session_start();

    include '../koneksi.php';
    include '../php/cek_user2.php';
    error_reporting(0);
 ?>

<!------ Include the above in your HEAD tag ---------->


<html>
<head>

  <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet">
  <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h3 class=" text-center"><a href="../<?php
 $jabatan = $_SESSION['jabatan'];
 if ($jabatan == 'penjual') {
   echo "penjual";
 }elseif ($jabatan == 'pembeli') {
   echo "pembeli";
 }else {
   echo "gagal";
 }
 ?>/index.php">SIJUKA</a> messenger</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <?php
            $user = $_GET['id'];
            $cht = $koneksi->query("SELECT DISTINCT nik_kirim
                                                    FROM tbl_chat
                                                    WHERE nik_kirim =! '$user' OR nik_terima = '$user' ORDER BY waktu ASC");
            // $trm = $cht['nik_terima'];

            ?>
          <div class="inbox_chat">
            <?php

            foreach ($cht as $row) {
              $trima = $row['nik_kirim'];

              $chet = mysqli_query($koneksi, "SELECT * FROM tbl_chat WHERE nik_kirim = '$trima' ORDER BY waktu DESC LIMIT 1");
              foreach ($chet as $raw) {
                $trm = $raw['nik_kirim'];
                $wkt = $raw['waktu'];
                $ichat = $raw['isi_chat'];

                ?>
            <a href="index.php?id=<?php echo $user;?>&trm=<?php echo $trm; ?>">
            <div class="chat_list ">
              <!-- active_chat -->
              <div class="chat_people">
                <div class="chat_img">
                  <?php

                     $data = mysqli_query($koneksi, "SELECT foto_profil FROM tbl_user WHERE nik = '$trm'");
                     while ($d = mysqli_fetch_array($data)) {
                         ?>
                                <tr>
                                      <td>
                                             <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>"  width="50" height="50">
                                       </td>
                                 </tr>
                  <?php
                     }
                  ?>
                </div>
                <div class="chat_ib">
                  <h5><?php
                  $pnrm = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_lengkap FROM tbl_user WHERE nik = '$trm'"));
                  echo $pnrm['nama_lengkap']?><span class="chat_date"><?php echo $wkt;?></span></h5>
                  <p><?php echo $ichat?></p>
                </div>
              </div>
            </div>
          <?php }} ?>
        </a>
          </div>
        </div>

        <!-- Memanggil isi Chat -->

        <?php
          $usir = $_GET['trm'];

          $achat = mysqli_query($koneksi, "SELECT * FROM tbl_chat WHERE (nik_kirim = '$user' AND nik_terima = '$usir') OR (nik_kirim = '$usir' AND nik_terima = '$user')" );
          $ama = mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama_lengkap FROM tbl_user WHERE nik = '$usir'"));
          ?>
          <div class="headind_srch">
            <div class="recent_heading">
              <h4><?php echo $ama['nama_lengkap']; ?></h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar">
                <span class="input-group-addon" hidden>
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>


        <div class="mesgs">
          <div class="msg_history">
            <?php
            foreach ($achat as $rew) {
              $sender = $rew['nik_kirim'];
              $time = $rew['waktu'];
              $isi = $rew['isi_chat'];

              if ($sender != $user) {

              ?>
              <div class="incoming_msg">
                <div class="incoming_msg_img">
                  <?php

                     $data = mysqli_query($koneksi, "SELECT foto_profil FROM tbl_user WHERE nik = '$usir'");
                     while ($d = mysqli_fetch_array($data)) {
                         ?>
                                <tr>
                                      <td>
                                             <img src="<?php echo "../foto_profil/".$d['foto_profil']; ?>"  width="50" height="50">
                                       </td>
                                 </tr>
                  <?php
                     }
                  ?>
                 </div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p><?php echo $isi;  ?></p>
                      <span class="time_date"> <?php  echo $time;?></span></div>
                    </div>
                  </div>
                <?php }
                  else {
                    ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo $isi;?></p>
                <span class="time_date"> <?php echo $time ;?></span> </div>
            </div>
          <?php } }?>

          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <form action="../php/balas_chat.php" method="post">
                <?php
                  $kirim = $_GET['id'];
                  $terima = $_GET['trm'];
                ?>
              <input type="hidden" name="kirim" value="<?php echo $kirim;?>">
              <input type="hidden" name="terima" value="<?php echo $terima; ?>">

              <input type="text" class="write_msg" name="chat" placeholder="Type a message" />
              <button type="submit" class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </form>
            </div>
          </div>
        </div>
      </div>


    </div></div>
    </body>
    </html>
