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
        } catch (PDOException $e) {
            
        }
        $statement = $dbconn->prepare('SELECT LinkImmagine FROM Immagini');
        $statement->execute();

        while ($record = $statement->fetch(PDO::FETCH_ASSOC)) {?>
                <img src="<?php echo $record['LinkImmagine']; ?>">
                <?php
        }
        ?>
</body>
</html>