<?php
session_start();

include("library/koneksi.php");
include("library/fungsi_tglindonesia.php");
define("INDEX", true);
?>
<!doctype html>
<html>

<head>
	<title>Karang Taruna RT 008 RW 009</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,
    	initial-scale=1">
	<link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="orgchart/orgchart.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="orgchart/orgchart.js"></script>
	<link rel="stylesheet" type="text/css" href="plugin/nanoGALLERY/nanogallery.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="plugin/nanoGALLERY/jquery.nanogallery.js"></script>
	<script type="text/javascript">
		//skrip jQuery disini
		$('document').ready(function() {
			$('.nanogallery').nanogallery();

		});
	</script>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.1&appId=266531614163682&autoLogAppEvents=1';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</head>

<body style="background-color: #F7F7F7">
	<div>

		<nav id="menu">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" style="margin-bottom: -0.5%">
						<?php include("menu.php"); ?>
					</div>
				</div>
			</div>
		</nav>

		<content id="content">
			<div class="container-fluid">
				<div class="row">

					<div class="">
						<?php include("konten.php"); ?>
					</div>

					<div class="col-md-4">
						<?php include("sidebar.php"); ?>
					</div>

				</div>
			</div>
		</content>
		<div>
			<?php include("footer.php"); ?>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122671821-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-122671821-1');
	</script>

</body>

</html>