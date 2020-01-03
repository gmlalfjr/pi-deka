<?php

if (!defined("INDEX")) die("---");
if (isset($_GET['tampil'])) $tampil = $_GET['tampil'];
else $tampil = "home";

?>

<div class="box">
	<?php
	if ($tampil == "home")	include("konten/agendakegiatan.php");

	elseif ($tampil == "kontak_proses")
		include("konten/kontak_proses.php");

	elseif ($tampil == "kontak")
		include("konten/kontak.php");

	elseif ($tampil == "agendakegiatan")
		include("konten/agendakegiatan.php");

	elseif ($tampil == "kepengurusan")
		include("konten/kepengurusan.php");

	elseif ($tampil == "galerifoto")
		include("konten/galerifoto.php");

	elseif ($tampil == "galerivideo")
		include("konten/galerivideo.php");

	elseif ($tampil == "galeri")
		include("konten/galeri.php");

	elseif ($tampil == "artikel_detail")
		include("konten/artikel_detail.php");

	elseif ($tampil == "agenda_detail")
		include("konten/agenda_detail.php");

	elseif ($tampil == "komentaragenda_proses")
		include("konten/komentaragenda_proses.php");

	elseif ($tampil == "komentar_proses")
		include("konten/komentar_proses.php");

	elseif ($tampil == "visimisi")
		include("konten/visimisi.php");

	elseif ($tampil == "profil")
		include("konten/profil.php");

	elseif ($tampil == "sejarah")
		include("konten/sejarah.php");

	// elseif ($tampil == "moto")
	// 	include("konten/moto.php");

	// elseif ($tampil == "beritaterkini")
	// 	include("konten/beritaterkini.php");

	// elseif ($tampil == "alamatsekretariat")
	// 	include("konten/alamatsekretariat.php");

	// elseif ($tampil == "pencarian")
	// 	include("konten/pencarian.php");

	else echo "Halaman Tidak Ditemukan!";
	?>
</div>