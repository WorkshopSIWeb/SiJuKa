<?php
  session_start();

  include 'koneksi.php';
  ?>

 <!DOCTYPE HTML>
 <html>
  <head>
    <title>FEEDBACK</title>
    </head>
    <body>
      <form action="php/feedback.php" method="post">
      <h4>Nama :<h4>
      <input type="text" name="nama" placeholder="nama">
      <h4>Email :<h4>
      <input type="text" name="email" placeholder="email">
      <h4>Masukan untuk Sijuka :<h4>
      <textarea name="masukan" placeholder="Tulis Masukan Anda Disini"></textarea>
      <br>
      <br>
      <input type="submit" value="Kirimkan">
    </form>
    </body>
 </html
