<?php
  include 'koneksi.php';

  $nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
            $ext_boleh = array('png','jpg','jpeg');
            $foto_profil = $_FILES['foto_profil']['name'];
            $x = explode('.', $foto_profil);
            $ext = strtolower(end($x));
            $size = $_FILES['foto_profil']['size'];
            $file_tmp = $_FILES['foto_profil']['tmp_name'];
            if (in_array($ext, $ext_boleh) === true) {
                if($size < 1044070){
                    move_uploaded_file($file_tmp, '../foto_profil/'.$foto_profil);
  $jabatan = $_POST['jabatan'];
	$pekerjaan = $_POST['pekerjaan'];
  $jenis_kelamin = $_POST['jenis_kelamin'];

  $update = mysqli_query($koneksi,"UPDATE tbl_user SET nama_lengkap = '$nama_lengkap', tgl_lahir = '$tgl_lahir', alamat = '$alamat', no_telepon = '$no_telepon', email = '$email', username = '$username', password = '$password', foto_profil = '$foto_profil', jabatan = '$jabatan', pekerjaan = '$pekerjaan', jenis_kelamin = '$jenis_kelamin' WHERE nik = '$nik'");
  if ($update) {
    // code...

    echo "<script>alert('S U K S E S. . . Data Berhasil DiUbah ! ! !');
            window.location='../tabel_user.php'</script>";
    // header("location: ../tabel_user.php");
  }else {
    echo "<script>alert('G A G A L . . . Data Gagal Diubah ! ! !')";
    echo $nik;
    echo $nama_lengkap;
  }
}
}
?>
