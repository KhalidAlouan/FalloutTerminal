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
		 
	?>

	<div id="options">
		<input class="butn" type="submit" name="play" value="Jugar" onclick="window.location.href='./Elegirdificultad.php'">
		

		<select name="select">
		  <option class="butn" type='submit' name="seeRanking" value="Ranking">Rankings</option> 
		  <option class="butn" type='submit' name="seeRanking" value="Ranking" onclick="window.location.href='./ranking.php'">Normal</option> 
		  <option class="butn" type='submit' name="seeRanking" value="RanDificil" onclick="window.location.href='./Hard/rankingHard.php'">Dificil</option> 
		  <option class="butn" type='submit' name="seeRanking" value="RanExtremo" onclick="window.location.href='./Extrem/rankingExtrem.php'">Extremo</option> 
		</select>
	</div>
	
</body>
</html>