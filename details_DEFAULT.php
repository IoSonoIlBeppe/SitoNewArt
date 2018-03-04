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

    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-9">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="img/T_1761.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="img/T_1777.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="img/T_1779.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="img/T_1781.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img src="img/T_1802.jpg" /></div>
						</div>
                        
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/T_1761.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="img/T_1777.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="img/T_1779.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="img/T_1781.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="img/T_1802.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-3">
						<h3 class="product-title">men's shoes fashion</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>