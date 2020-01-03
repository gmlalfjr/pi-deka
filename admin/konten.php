<?php
 if(isset($_GET['tampil'])) $tampil = $_GET['tampil'];
 else $tampil = "beranda";
 
 if($tampil == "beranda")   include("beranda.php");
 elseif($tampil == "keluar") include("keluar.php");

 elseif($tampil == "menu")
 			include("menu/menu_tampil.php");
 elseif($tampil == "menu_tambah")
 			include("menu/menu_tambah.php");
 elseif($tampil == "menu_tambahproses")
 			include("menu/menu_tambahproses.php");
 elseif($tampil == "menu_edit")
 			include("menu/menu_edit.php");
 elseif($tampil == "menu_editproses")
 			include("menu/menu_editproses.php");
 elseif($tampil == "menu_hapus")
 			include("menu/menu_hapus.php");
 
 elseif($tampil == "artikel")
 			include("artikel/artikel_tampil.php");
 elseif($tampil == "artikel_tambah")
 			include("artikel/artikel_tambah.php");
 elseif($tampil == "artikel_tambahproses")
 			include("artikel/artikel_tambahproses.php");			
 elseif($tampil == "artikel_edit")
 			include("artikel/artikel_edit.php");			
 elseif($tampil == "artikel_editproses")
 			include("artikel/artikel_editproses.php");
 elseif($tampil == "artikel_hapus")
 			include("artikel/artikel_hapus.php");

 elseif($tampil == "agenda")
 			include("agenda/agenda_tampil.php");
 elseif($tampil == "agenda_tambah")
 			include("agenda/agenda_tambah.php");
 elseif($tampil == "agenda_tambahproses")
 			include("agenda/agenda_tambahproses.php");			
 elseif($tampil == "agenda_edit")
 			include("agenda/agenda_edit.php");			
 elseif($tampil == "agenda_editproses")
 			include("agenda/agenda_editproses.php");
 elseif($tampil == "agenda_hapus")
 			include("agenda/agenda_hapus.php");	
			
 elseif($tampil == "galeri")
 			include("galeri/galeri_tampil.php");
 elseif($tampil == "galeri_tambah")
 			include("galeri/galeri_tambah.php");
 elseif($tampil == "galeri_tambahproses")
 			include("galeri/galeri_tambahproses.php");			
 elseif($tampil == "galeri_edit")
 			include("galeri/galeri_edit.php");			
 elseif($tampil == "galeri_editproses")
 			include("galeri/galeri_editproses.php");
 elseif($tampil == "galeri_hapus")
 			include("galeri/galeri_hapus.php");	 		
			
 elseif($tampil == "video")
 			include("video/video_tampil.php");
 elseif($tampil == "video_tambah")
 			include("video/video_tambah.php");
 elseif($tampil == "video_tambahproses")
 			include("video/video_tambahproses.php");			
 elseif($tampil == "video_edit")
 			include("video/video_edit.php");			
 elseif($tampil == "video_editproses")
 			include("video/video_editproses.php");
 elseif($tampil == "video_hapus")
 			include("video/video_hapus.php");	 		
 			 			
 elseif($tampil == "pesan")
 			include("pesan/pesan_tampil.php");
 elseif($tampil == "pesan_balas")
 			include("pesan/pesan_balas.php");
 elseif($tampil == "pesan_balasproses")
 			include("pesan/pesan_balasproses.php");			
 elseif($tampil == "pesan_hapus")
 			include("pesan/pesan_hapus.php");	 
			
 elseif($tampil == "user_edit")
 			include("user/user_edit.php");
 elseif($tampil == "user_editproses")
 			include("user/user_editproses.php");

 elseif($tampil == "komentar1")
 			include("komentar/komentar_tampil1.php");
 elseif($tampil == "komentar")
 			include("komentar/komentar_tampil.php");
 elseif($tampil == "komentar_hapus")
 			include("komentar/komentar_hapus.php");
 elseif($tampil == "komentar_agenda")
 			include("komentar_agenda/komentaragenda_tampil.php");
 elseif($tampil == "komentaragenda_hapus")
 			include("komentar_agenda/komentaragenda_hapus.php");

else echo "Konten tidak ada";
 
?>