<!DOCTYPE html>
<html lang="es">
<head>
    <title>Terminal</title>
	<meta charset="utf-8">
	<style type="text/css" src=""></style>
	<script type="text/javascript" src="fterminalJS.js"></script>
    <link rel="stylesheet" type="text/css" href="terminal.css"> 
</head>
<body>
	<?php
		$array= array();
		$fp = fopen("paraules.txt", "r");
		while (!feof($fp)){
			$linea = fgets($fp);
    		
    	
    		array_push($array, $linea);
		}
		fclose($fp);
		
		$randomPalabra = array_rand($array, 6);
		echo '<div id="box1">';
		echo '<div id="box2">';
		echo $array[$randomPalabra[0]];
		echo $array[$randomPalabra[1]];
		echo $array[$randomPalabra[2]];
		echo $array[$randomPalabra[3]];
		echo $array[$randomPalabra[4]];
		echo $array[$randomPalabra[5]];
		echo "</div>";
		echo "</div>";

	?>
</body>
</html>