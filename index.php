<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IndexHTML</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
	session_start();
		 // Inseting data inside text file.
		 if (isset($_GET['intentos']) && isset($_GET['nomUsuari']) && isset($_GET['min']) && isset($_GET['sec'])) {
		 	$file = fopen("ranking.txt", "a");
		 	$intents = $_GET['intentos'];
		 	$usuari = $_GET['nomUsuari'];
		 	$min = $_GET['min'];
		 	$sec = $_GET['sec'];
		 	$linea_inserir = $usuari.";".$intents.";".$min.";".$sec.";";
		 	fwrite($file, $linea_inserir . PHP_EOL);
		 	fclose($file);
		 }

		 $_SESSION['winInput']=$_GET['nomUsuari'];
		 echo $_SESSION['winInput'];
		 
	?>

	<div id="options">
		<input class="butn" type="submit" name="play" value="Jugar" onclick="window.location.href='./Elegirdificultad.php'">
		<input class="butn" type="submit" name="seeRanking" value="Ranking" onclick="window.location.href='./ranking.php'">
		<input class="butn" type="submit" name="seeRanking" value="Ran-Dificil" onclick="window.location.href='./rankingHARD.php'">
		<input class="butn" type="submit" align='center' name="seeRanking" value="Ran-Extremo" onclick="window.location.href='./rankingExtrem.php'">
	</div>
	
</body>
</html>