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
<body style="background: #F7F7F7">
	<div>
<div style="margin: 1% 2% 0.5% 2%">
	<header id="header">
		<img src="gambar/headerkarangtaruna.jpg" alt="header" height="150px" width="100%">
	</header>
	<nav id="menu">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="col-md-12">
						<?php include("menu.php"); ?>
                    </div>
                </div>   
        	</div>
	</nav>
    
    <content id="content">
        <div class="container-fluid">
        	<div class="row">

            	<div class="col-md-8">
				<?php include("konten.php"); ?>
				</div>
				
				<div class="col-md-4">    
            	<?php include("sidebar.php"); ?>
            	</div>
				
        	</div>
        </div>
   </content>
	

   
	<footer id="footer">	
	<div style="background: #C5C5C5">
		<div class="container-fluid">
			<div class="row" style="margin: 20px 0 0;">
				<div class="col-md-12">
					<div class="pull-left" style="padding: 0 0.1% 0 -1%; margin-left: -40px;">
						<?php include("footerleft.php"); ?>
					</div>
					<div class="pull-right" style="padding: 0 0.1%;">
						<?php include("footerright.php"); ?>
					</div>
				</div>
			</div>
    	</div>
	</div>
    	<div class="container-fluid">
			<div class="row">
            	<div class="col-md-12">
                	<p align="center" style="color: whitesmoke; margin-top: 15px">Copyright &copy; Aplikasi Kuis Berbasis Web</p>
				</div>
			</div>
    	</div>
    </footer>
</div>    
    <script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
	</script>
    </body>
</html>