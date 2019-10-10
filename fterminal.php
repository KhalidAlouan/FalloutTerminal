<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
    <meta charset="utf-8" />
    <title>Terminal</title>
=======

	<title>Fallout Terminal</title>
	<meta charset="utf-8">
	<style type="text/css" src=""></style>
	<script type="text/javascript" src="fterminalJS.js"></script>
>>>>>>> 53395d1f0381c2988f1105be3c71c5d91c6f5bb6
    <link rel="stylesheet" type="text/css" href="terminal.css"> 
</head>
<body>
	<div id="box1">
	</div>	
	<?php

		$array= array();
		$fp = fopen("paraules.txt", "r");
		while (!feof($fp)){
			$linea = fgets($fp);
    		
    	
    		array_push($array, $linea);
		}
		fclose($fp);
		
		$randomPalabra = array_rand($array, 6);
		echo "<div align='center'>";
		echo $array[$randomPalabra[0]];
		echo $array[$randomPalabra[1]];
		echo $array[$randomPalabra[2]];
		echo $array[$randomPalabra[3]];
		echo $array[$randomPalabra[4]];
		echo $array[$randomPalabra[5]];
		echo "</div>";

	?>
</body>
</html>