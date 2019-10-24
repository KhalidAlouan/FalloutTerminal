<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IndexHTML</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
		 // Inseting data inside text file.
		 if (isset($_GET['i1']) && isset($_GET['usr']) && isset($_GET['min']) && isset($_GET['sec'])) {
		 	$file = fopen("ranking.txt", "a");
		 	$intents = $_GET['i1'];
		 	$usuari = $_GET['usr'];
		 	$min = $_GET['min'];
		 	$sec = $_GET['sec'];
		 	$linea_inserir = $usuari.";".$intents.";".$min.";".$sec.";";
		 	fwrite($file, $linea_inserir . PHP_EOL);
		 	fclose($file);
		 }
		 
	?>

	<div id="options">
		<input class="butn" type="submit" name="play" value="Jugar" onclick="window.location.href='./fterminal.php'">
		<input class="butn" type="submit" name="seeRanking" value="Ranking" onclick="window.location.href='./ranking.php'">
	</div>

</body>
</html>