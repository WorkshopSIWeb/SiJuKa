<?php
    include 'koneksi.php';
    $nk = $_POST['nik'];
    $nl = $_POST['nama_lengkap'];
    $tgl = $_POST['tgl_lahir'];
    $alt = $_POST['alamat'];
    $no = $_POST['no_telepon'];
    $eml = $_POST['email'];
    $usn = $_POST['username'];
    $pass = $_POST['password'];
            $ext_boleh = array('png','jpg','jpeg');
            $foto_profil = $_FILES['foto_profil']['name'];
            $x = explode('.', $foto_profil);
            $ext = strtolower(end($x));
            $size = $_FILES['foto_profil']['size'];
            $file_tmp = $_FILES['foto_profil']['tmp_name'];
            if (in_array($ext, $ext_boleh) === true) {
                if($size < 1044070){
                    move_uploaded_file($file_tmp, '../foto_profil/'.$foto_profil);
    $jb = $_POST['jabatan'];
    $pkjn = $_POST['pekerjaan'];
    $jenkel = $_POST['jenis_kelamin'];
            


$query = mysqli_query($koneksi,"INSERT INTO tbl_user (nik, nama_lengkap, tgl_lahir, alamat, no_telepon, email, username, password, foto_profil, jabatan, pekerjaan, jenis_kelamin) VALUES ('$nk','$nl','$tgl','$alt','$no','$eml','$usn','$pass','$foto_profil','$jb','$pkjn','$jenkel')");
if ($query) {
    echo "<script>alert('S U K S E S. . . Data Berhasil Ditambahkan ! ! !');
            window.location='../tabel_user.php'</script>";
    // header("location:../tabel_user.php");
}else {
    echo "<script>alert('G A G A L . . . Data Gagal Ditambahkan ! ! !')";
    
  }
}
}

 ?>