<!DOCTYPE html>
<html lang="es-ES">
	<head>
		<title>TecSur Cuautla</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Axel Lanuza">
		<meta name="description" content="Uso de bootstrap 3">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

		<!-- Bootstrap -->
		<link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="_/css/mis_estilos.css" rel="stylesheet" media="screen">
		<link href="_/css/flata-ui.css" rel="stylesheet" media="screen">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="home">

		<section class="container">

				<div class="content row">
			          <?php include "_/components/php/header.php"; ?>
			          <?php include "_/components/php/carousel.php"; ?>
						<section class="main col col-lg-8">
				          <?php include "_/components/php/article-intro.php"; ?>
				          <?php include "_/components/php/article-aboutartists.php"; ?>
				          <?php include "_/components/php/article-aboutvenue.php"; ?>

						</section><!-- main -->
						<section class="sidebar col col-lg-4">

						</section><!-- sidebar -->
				</div><!-- content -->
		    		<?php include "_/components/php/footer.php"; ?>

		</section><!-- container -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="_/js/bootstrap.js"></script>
		<script src="_/js/misscripts.js"></script>

	</body>
</html>