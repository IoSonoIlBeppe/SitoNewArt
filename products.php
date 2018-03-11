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
        <?php 
            try {
                $dbconn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=newart_prova', 'root', 'beppe');
                $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {}
        ?>

	<!-- navbar -->
	<nav class="homenav navbar navbar-inverse navbar-static-top ">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://disputebills.com">
                    <img class="img-responsive hidden-xs" src="img/logo_rett.jpg" alt="New Art Productions">
                    <img class="img-responsive hidden-sm hidden-md hidden-lg" src="img/logo_quadrato.jpg" alt="New Art Productions">
				</a>
			</div>
			<div id="navbar3" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><a href="index.php">Home</a></li>
					<li><a href="#">Chi siamo</a></li>
					<li class="dropdown">
						<a href="categories.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prodotti <span class="caret"></span></a>
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
	
	<!-- content -->
	<div class="container-fluid">
        
        <div class="hidden-xs col-sm-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
        </div>
        
        <nav class="navbar navbar-inverse navbar-collapse hidden-sm hidden-md hidden-lg">
            <div class="container-fliud">
                
            </div>
        </nav>
        
        <div class="col-xs-12 col-sm-9">

            <?php 
                $statement = $dbconn->prepare('SELECT LinkImmagine FROM Immagini');
                $statement->execute();

                while ($record = $statement->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="<?php echo $record['LinkImmagine']; ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
        
	</div>
	<!-- end content -->
	
	<!-- footer -->
	<footer class="footer">
		<div class="container text-center">
			<span class="text-muted">New Art Production Srl Via Brunacci, 5 - 30175 Marghera (VE) - Tel (+39) 041 936899 - Fax (+39) 041 5380877 - CF e P.Iva 03078210279</span>
		</div>
	</footer>
	<!-- end footer -->

</body>
</html>