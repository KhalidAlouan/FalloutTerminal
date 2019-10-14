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

		// Array que contindrà totes les paraules.

		//array ca
		$special_characters = array('!','"','#','$','%','(',')','*','+',',','-','.','/',':',';','=','?','@','[',']','^','_','`','{','|','~');
		$volcado = "";

		//

		// Caracteres especiales de forma random

		for ($i=1; $i<=354;$i++){
			$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
			
		}
	

		$array= array();
		// Obrim l'arxiu que conté les paraules.
		$fp = fopen("paraules.txt", "r");
		
		// Emplenem l'array.
		while (!feof($fp)){
			$linea = fgets($fp);
    		array_push($array, $linea);
		}

		// Tanquem l'arxiu.
		fclose($fp);

		// Escollim sis paraules a l'atzar.
		$randomPalabra = array_rand($array, 6);

		// Mostrem les paraules per pantalla.
		echo '<div id="box1">';
		echo '<div id="box2">';

		/**
		echo $array[$randomPalabra[0]];
		echo $array[$randomPalabra[1]];
		echo $array[$randomPalabra[2]];
		echo $array[$randomPalabra[3]];
		echo $array[$randomPalabra[4]];
		echo $array[$randomPalabra[5]];
		echo '<br>';*/



		//$primera=$array[$randomPalabra[0]];
		//$segunda=$array[$randomPalabra[1]];
		//$terc=$array[$randomPalabra[2]];
		//$cuarta=$array[$randomPalabra[3]];
		//$quinta=$array[$randomPalabra[4]];
		//$sexta=$array[$randomPalabra[5]];


		$arrayDirecciones1 = array("0xF91C", "0xF928", "0xF934", "0xF940", "0xF94C", "0xF958", "0xF964", "0xF970", 
									"0xF97C", "0xF988", "0xF994", "0xF9A0", "0xF9AC", "0xF9B8", "0xF9C4", "0xF9D0", "0xF9DC");

		$arrayDirecciones2 = array("0xF9E8", "0xF9F4", "0xFA00", "0xFAFC", "0xFA18", "0xFA24", "0xFA30", "0xFA3C", 
									"0xFA48", "0xFA54", "0xFA60", "0xFA6C", "0xF978", "0xFA84", "0xFA90", "0xFA9C", "0xFAA8");

		$attemptsLeft = 5;


		echo '<h4>ROBCO INDUSTRIES (TM) TERMLINK PROTOCOL</h4>';
		echo '<h4>ENTER PASSWORD NOW</h4>'; 
		echo "<h4>$attemptsLeft ATTEMPT(S) LEFT:	"; 
		echo '<progress id="progressFirst"></progress> <progress id="progressSecond"></progress> <progress id="squareThird"></progress> <progress id="progressFourth"></progress> <progress id="progressFifth"></progress></h4>';

		// I create the table.
		echo '<table id="table1">';
		echo '<tbody>';

		// Llistes amb el volcat a pujar.
		$cachos = array();
		$cachos2 = array();

		// Contadors per agafar el que toca de les llistes.
		$contCachos = 0;
		$contCachos2 = 0;
		// I create every row iterating.
		for($i=0; $i < 17; $i++) {

			echo '<tr>';

			$direction1 = $arrayDirecciones1[$i];
			$direction2 = $arrayDirecciones2[$i];

			echo '<th class="column1" align="left">';
			echo "$direction1</th>";
			echo '<th class="column2">	$cachos[contCachos]</th>';
			echo '<th class="column1" align="left">';
			echo "$direction2</th>";
			echo '<th class="column2">	$cachos2[contCachos2]</th>';

			echo '</tr>';
			$contCachos += 1;
			$contCachos2 += 1;
		}

		echo '</tbody>';
		echo '</table>';


		$volcado = $volcado;

		$id_span = array('wfirst','wsecond','wthird','wfourth','wfifth','wsixth');
		$rand_pos = array('');
		for ($i=0; $i < 6; $i++) { 
			$random_position = rand(0,strlen($volcado));

			if (in_array($random_position, $rand_pos)) {
				$i = $i - 1;	
			}else{
				$volcado = substr_replace($volcado, "<span id='".$id_span[$i]."'>".$array[$randomPalabra[$i]]."</span>", $random_position,0);
				

				array_push($rand_pos, $random_position+3);
				array_push($rand_pos, $random_position+4);
				array_push($rand_pos, $random_position+5);

			}
		}
		


		$i = 1;
		for ($i; $i<=12;$i++){
			$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
		}



		// for ($i=0; $i < 6; $i++) { 
		// 	$rand_pos = array('');
		// 	$random_position = rand(0,strlen($volcado)-1);
		// 	if (in_array($random_position, $rand_pos, false)) {
		// 		$volcado = $volcado=$array[$randomPalabra[$i]];
		// 	}
		// }		


			


		// $special_characters = array('!','"','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','[',']','^','_','`','{','|','~');

		// $volcado = "";

		// $i = 0;
		// for ($i; $i<=12;$i++){
		// 	$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
			
		// }
		
		$volcado=preg_replace('/\s+/','',$volcado);
		$volcado = preg_replace("/(id)/", " id", $volcado);
		// echo $volcado.$array[array_rand($array,1)];
		echo $volcado;
		

		echo "</div>";
		echo "</div>";


	?>

</body>
</html>