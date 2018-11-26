<?php
//if(isset($_POST['REGISTER'])){
	include 'koneksi.php';
// if($_POST['upload']){
	$nik = $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$no_telepon = $_POST['no_telepon'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];


			$ext_boleh = array('png','jpg','jpeg');
			$foto_profil = $_FILES['file']['name'];
			$x = explode('.', $foto_profil);
			$ext = strtolower(end($x));
			$size = $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			if (in_array($ext, $ext_boleh) === true) {
				if($size < 1044070){
					move_uploaded_file($file_tmp, 'foto_profil/'.$foto_profil);
					//$query = mysqli_query("INSERT INTO upload VALUES(NULL, '$foto_profil')");
			// 		if ($query) {
			// 			echo "File Berhasil Diupload";
			// 		}
			// 		else {
			// 			echo "Gagal Mengupload Gambar";
			// 		}
			// 	}
			// 	else {
			// 		echo 'Ukuran File Terlalu Besar';
			// 	}
			// }
			// else {
			// 	echo "Extendi File Tidak Didukung";
			// }




$query = mysqli_query($koneksi,"INSERT INTO tbl_user VALUES ('$nik','$nama_lengkap','$tanggal_lahir','$alamat','$no_telepon','$email','$username','$password','$foto_profil','penjual',' ',' ')");
// if($query){
// echo 'data berhasil di tambah<br>';
// echo '<a href="loregpembeli.html">kembali</a>';
// }else{
// echo 'gagal memasukkan data';
// echo '<a href="index.php">kembali</a>';
// }
if ($query) {
	header("location:loregpembeli.php?pesan=approve");
}
else {
	echo "Gagal Mengupload Gambar";
}
}
else {
echo 'Ukuran File Terlalu Besar';
}
}
else {
echo "Extendi File Tidak Didukung";
}
// }
?>
