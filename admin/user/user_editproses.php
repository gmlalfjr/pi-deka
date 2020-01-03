<?php

	$username= $_SESSION['username'];
	
	if($_POST['password'] == ""){
		$edit = mysqli_query($koneksi, "UPDATE user SET
			username	= '$_POST[username]' 
		Where username='$username'") or die(mysqli_error($koneksi));
	if($edit) echo"Profil Berhasil di Edit";
	
	}else{
		if($_POST['password'] != $_POST['password_ulang']){
			echo"<p style='color:red'>
			Password dan password ulang tidak sama</p>";
	}else{
		$password	= $_POST['password'];
		$edit = mysqli_query($koneksi, "UPDATE user SET
				username	= '$_POST[username]',
				password	= '$password'
		Where username='$username'") or die(mysqli_error($koneksi));
	if($edit) echo "Profil Berhasil di Edit";
	
	}
}

echo"<meta http-equiv='refresh' content='1;
		url=?tampil=user_edit'>";
?>
		