<?php
    session_start();

    include '../koneksi.php';
    include '../php/cek_user2.php'
 ?>

<!------ Include the above in your HEAD tag ---------->


<html>
<head>

  <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
  <link href="style.css" type="text/css" rel="stylesheet">

</head>
<body>
<div class="container">
<h3 class=" text-center">Messaging</h3>
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
                                                    WHERE nik_kirim =! '$user' OR nik_terima = '$user' ORDER BY waktu DESC");
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
            <a href="#">
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
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test, which is a new approach to have</p>
                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:01 AM    |    Today</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>We work directly with our designers and suppliers,
                    and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                  <span class="time_date"> 11:01 AM    |    Today</span></div>
              </div>
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>


    </div></div>
    </body>
    </html>
