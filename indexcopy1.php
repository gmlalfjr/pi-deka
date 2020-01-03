	<?php
	session_start();
	
		include("library/koneksi.php");
		include("library/fungsi_tglindonesia.php");
		define("INDEX",true);
?>
<!doctype html>
<html>
<head>
	<title>Karang Taruna RT 008 RW 009</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    	initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
		href="plugin/nanoGALLERY/nanogallery.css">
    
	<link rel="stylesheet" href="css/style.css">
    
    <script src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript"
		src="plugin/nanoGALLERY/jquery.nanogallery.js"></script>
    <script type="text/javascript">
		//skrip jQuery disini
		$('document').ready(function(){
			$('.nanogallery').nanogallery();	

		});
	</script>
</head>
<body>
	<div>
<div style="">
	<header id="header">
		<img src="gambar/headerkarangtaruna.jpg" alt="header" height="150px" width="100%">
	</header>
	
	<div style="background: #232D42">
	<?php include("menu1.php"); ?>
	</div>
    <content id="content">
        <div class="container-fluid">
        	<div class="row">
	
				<div class="col-md-3">    
            	<?php include("sidebarkiri.php"); ?>
            	</div>
				
            	<div class="col-md-6">
				<?php include("konten.php"); ?>
				</div>
				
				<div class="col-md-3">    
            	<?php include("sidebarkanan.php"); ?>
            	</div>
				
        	</div>
        </div>
   </content>
   
	<footer id="footer">
    	<div class="container-fluid">
        	<div class="row">
				<div class="pull-left">
					<p>LALALALALALAL</p>
				</div>
				<div class="pull-right">
					<p>LALALALALAL</p>
				</div>
            	<div class="col-md-12">
					<div>
                	<p align="center">Copyright &copy; Aplikasi Kuis Berbasis Web</p>
        			</div>
				</div>
    		</div>
    	</div>
    </footer>
</div>    
    <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
	</script>
    </body>
</html>