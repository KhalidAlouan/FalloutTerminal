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
		//array ca
		$special_characters = array('!','"','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','[',']','^','_','`','{','|','~');
		$volcado = "";

		//

		// Caracteres especiales de forma random

		for ($i=1; $i<=354;$i++){
			$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
			
		}
	

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
		//$primera=$array[$randomPalabra[0]];
		//$segunda=$array[$randomPalabra[1]];
		//$terc=$array[$randomPalabra[2]];
		//$cuarta=$array[$randomPalabra[3]];
		//$quinta=$array[$randomPalabra[4]];
		//$sexta=$array[$randomPalabra[5]];

		$volcado = $volcado;
		$id_span = array('wfirst','wsecond','wthird','wfourth','wfiveth','wsixth');
		$rand_pos = array('');
		for ($i=0; $i < 6; $i++) { 
			$random_position = rand(0,strlen($volcado)-1);

			if (in_array($random_position, $rand_pos)) {
				$i = $i - 1;
				
			}else{
				$volcado = substr_replace($volcado, "<span>".$array[$randomPalabra[$i]]."</span>", $random_position, 0);
				
				array_push($rand_pos, $random_position);
				array_push($rand_pos, $random_position-1);
				array_push($rand_pos, $random_position+1);
				
			}
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
		// echo $volcado.$array[array_rand($array,1)];
		echo $volcado;
		
		echo "</div>";
		echo "</div>";



	?>
</body>
</html>