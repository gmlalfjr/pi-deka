<?php
	session_start();
	
	include("../library/koneksi.php");
	
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	
	$cek		= mysqli_query($koneksi, "SELECT * FROM user WHERE
			username	= '$username'
			and password= '$password'");
	$data		= mysqli_fetch_array($cek);
	$jumlah		= mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username']	= $data['username'];
		$_SESSION['password']	= $data['password'];
		
		echo"<center>Login Berhasil!</center>";
		echo"<meta http-equiv='refresh' content='1;
				url=admin.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br>
			 <b><a href='index.php'>ULANGI</a></b></center>";
	}
?>