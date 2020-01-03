<?php
	session_start();
	
	if(!empty($_SESSION['username']) and !empty($_SESSION['password'])){
		include("../library/koneksi.php");
		define("INDEX",true);
?>
<!doctype html>
<html>
<head>
	<title>Halaman Administrator</title>
    
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    	initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css">
	
    <link rel="stylesheet" href="../css/admin.css">
	
	<script type="text/javascript" 
			src="js/jquery-3.1.0.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
        	<?php include("menu.php"); ?>
		</div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-sm-3 sidebar hidden-xs">
				<?php include("sidebar.php"); ?>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<?php include("konten.php"); ?>
			</div>
        </div>
	</div>
		    
    <script type="text/javascript" 
			src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
	</script>
</body>
</html>

<?php
	}else{
		echo"Dilarang Membuka Halaman ini!!";
		echo"<meta http-equiv='refresh' content='1;
				url=index.php'>";
	}
?>


