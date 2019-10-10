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
		 $primera=$array[$randomPalabra[0]];
		 $segunda=$array[$randomPalabra[1]];
		 $terc=$array[$randomPalabra[2]];
		 $cuarta=$array[$randomPalabra[3]];
		 $quinta=$array[$randomPalabra[4]];
		 $sexta=$array[$randomPalabra[5]];

		$special_characters = array('!','"','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','[',']','^','_','`','{','|','~');

		$volcado = "";

		$i = 1;
		for ($i; $i<=354;$i++){
			$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
			
		}
		$volcado = $volcado . $primera . $segunda . $terc . $cuarta . $quinta . $sexta;
		$volcado=str_replace(' ','',$volcado);
		echo $volcado;
		
		echo "</div>";
		echo "</div>";



	?>
</body>
</html>