<?php
if (!defined("INDEX")) die("---");
?>
<nav class="navbar navbar-default nav-tabs" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">KarangTaruna</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav nav-tabs nav-stacked">

				<?php
				$menu = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY 
urutan") or die(mysqli_error($koneksi));
				while ($data = mysqli_fetch_array($menu)) {
					$submenu = mysqli_query($koneksi, "Select * From submenu
			 where id_menu='$data[id_menu]'");
					?>
					<li role="presentation"><a href="<?= $data['link']; ?>" style="color: #337ab7">
							<?= $data['judul']; ?></a></li>
				<?php

				}
				?>
			</ul>
			<form method="post" action="?tampil=pencarian" class="navbar-form navbar-right" role="search">
				<div class="form-group" style="padding-top: 2%">
					<input type="text" name="kata" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn default" style="margin-top: 2%">Submit</button>
			</form>


		</div><!-- /.navbar-collapse -->
	</div>
</nav>