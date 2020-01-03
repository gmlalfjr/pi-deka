<?php
if (!defined("INDEX")) die("---");
?>
<br>
<!-- 1 /-->
<a href="http://provestra.co" style="font-size:15px;">Jumlah Pengunjung</a><br>
<a href="http://provestra.co"><img src="http://provestra.co/count.php?c_style=2&id=1475043624" border="0"></a><br>

<h4 class="judulsidebar"></h4>
<ul class="nav nav-tabs">
	<li class="active"><a href="#konten1" data-toggle="tab">Terbaru</a></li>
	<li><a href="#konten2" data-toggle="tab">Popular</a></li>
	<li><a href="$konten3" data-toggle="tab">Komentar</a></li>
</ul>

<div class="tab-content">
	<div class="tab-pane fade in active" id="konten1">
		<ul>
			<?php
			$artikel	= mysqli_query($koneksi, "select * from artikel 
			order by id_artikel desc limit 5");
			while ($data = mysqli_fetch_array($artikel)) {
				echo "<li><img src='gambar/artikel/$data[gambar]'>
				<a href='?tampil=artikel_detail&id=
				$data[id_artikel]'>$data[judul]</a></li>";
			}
			?>
		</ul>
	</div>

	<div class="tab-pane fade" id="konten2">
		<ul>
			<?php
			$artikel	= mysqli_query($koneksi, "select * from artikel 
			order by hits desc limit 5");
			while ($data = mysqli_fetch_array($artikel)) {
				echo "<li><li><img src='gambar/artikel/$data[gambar]'>
				<a href='?tampil=artikel_detail&id=
				$data[id_artikel]'>$data[judul]</a></li>";
			}
			?>
		</ul>
	</div>

	<div class="tab-pane fade" id="konten3">
		<ul>
			<?php
			$komentar = mysqli_query($koneksi, "Select * from komentar order
			by id_komentar desc limit 5");
			while ($data = mysqli_fetch_array($komentar)) {
				echo "<li><b>$data[nama]:</b> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>
				$data[komentar]</a></li>";
			}
			?>
		</ul>

	</div>
</div>

<!-- 3 /-->
<h4 class="judulsidebar">Maps</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6676672144313!2d106.95208812257428!3d-6.17482609926909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b02371fb313%3A0x2286c764cf0153f8!2sJl.+Cempaka+VI%2C+Cakung+Tim.%2C+Cakung%2C+Kota+Jakarta+Timur%2C+Daerah+Khusus+Ibukota+Jakarta+13910!5e0!3m2!1sen!2sid!4v1475044264651" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

<!-- AddToAny BEGIN -->
<h4 class="judulsidebar">SHARE</h4>
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
	<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
	<a class="a2a_button_facebook"></a>
	<a class="a2a_button_twitter"></a>
	<a class="a2a_button_google_plus"></a>
	<a class="a2a_button_line"></a>
	<a class="a2a_button_pinterest"></a>
	<a class="a2a_button_whatsapp"></a>
	<a class="a2a_button_myspace"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

<!-- 4 /-->
<a class="twitter-timeline" data-lang="id" data-width="100%" data-height="375" href="https://twitter.com/madesucrew89">Tweets by madesucrew89</a>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>