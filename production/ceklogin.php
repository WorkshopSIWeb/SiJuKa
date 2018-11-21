<?php
	session_start();
if(isset($POST['login'])){
	$user = $_POST['user_login'];
	$pass = $_POST['pass_login'];
	$db_link = mysql_connect('localhost', 'root', '', 'sijuka');
	$sql - "SELECT * FROM tb_user WHERE username='$user' and password('pass')";
	$result = mysql_query($db_lnk, $sql);
	$jml=mysqli_num_rows($result);

	if($jml==1){
		$_SESSION['login']=$user;
		echo'<script>window.location="index.php?username='.$user.'"</script>';
	}
	else{
		echo '<script>window.location="login.php"</script>';
	}
}