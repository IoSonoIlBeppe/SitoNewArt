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
            $dbconn = new PDO('mysql:host=ffaggian.no-ip.org;port=3306;dbname=newart_prova', 'root', 'beppe');
            $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $statement = $dbconn->prepare('select LinkImmagine from "Immagini"');
        $statement->execute();

        while ($record = $statement->fetch(PDO::FETCH_ASSOC)) {
            foreach ($record as $row) {?>
                <img src="<?php echo $row["LinkImmagine"] ?>">
                <?php
            }
        }
        ?>

        <?php echo ciao ?>
</body>
</html>