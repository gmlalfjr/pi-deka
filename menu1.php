<nav class="navbar navbar-default" style="background: #232D42; border: none; margin-left: 2%">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">KarangTaruna</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background: #232D42">
      <ul class="nav navbar-nav nav-tabs nav-stacked" style="background: #232D42; border: none;">

<?php
	$menu = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY 
urutan") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($menu)){
?>
	<li role="presentation"><a href="<?= $data['link']; ?>" style="color: white">
    	<?= $data['judul']; ?></a></li>
<?php
	}
?>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" name="kata" class="form-control" placeholder="Cari Berita Terkini Disini ...">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>