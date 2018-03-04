<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Matteo Faggian">

	<title>New Art Production</title>

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!-- navbar -->
	<nav class="homenav navbar navbar-inverse navbar-static-top ">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
                    <img class="img-responsive hidden-xs" src="img/logo_rett.jpg" alt="New Art Productions">
                    <img class="img-responsive hidden-sm hidden-md hidden-lg" src="img/logo_quadrato.jpg" alt="New Art Productions">
				</a>
			</div>
			<div id="navbar3" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#">Chi siamo</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Prodotti <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="products.php">Tele</a></li>
							<li><a href="products.php">Specchiere</a></li>
							<li><a href="products.php">Orologi</a></li>
							<!--<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>-->
						</ul>
					</li>
					<li><a href="about.php">Contatti</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</nav>
	<!-- end navbar -->

	<!-- carousel -->
	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/la.jpg" alt="Chania">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>LA is always so much fun!</p>
				</div>
			</div>

			<div class="item">
				<img src="img/chicago.jpg" alt="Chicago">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<p>Thank you, Chicago!</p>
				</div>
			</div>

			<div class="item">
				<img src="img/ny.jpg" alt="New York">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end carousel -->
	<!-- footer -->
	<footer class="footer">
		<div class="container text-center">
			<span class="text-muted">New Art Production Srl Via Brunacci, 5 - 30175 Marghera (VE) - Tel (+39) 041 936899 - Fax (+39) 041 5380877 - CF e P.Iva 03078210279</span>
		</div>
	</footer>
	<!-- end footer -->


</body>
</html>