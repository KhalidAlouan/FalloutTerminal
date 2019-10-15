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

		define ('total_char','408');

		$special_char = array('!' , '"' , '$' , '%' , '&' , '/' , '(' , ')' , '=' , '?' , '|' , '#' , '>', '{' , ']' , '[' , '}');
		$volcado = "";


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

		
		$array_choosen_word_index = [];
		$choosen_word_array = [];
		$i = 0;
		$leng_array = count($array)-1;
		while ($i<6) {
			$random_index = rand(0,$leng_array);
			while (in_array($random_index, $array_choosen_word_index)){
					$random_index = rand(0,$leng_array);
				}
			

			$array_choosen_word_index[] = $random_index;
			$choosen_word_array[] = $array[$random_index];
			$i = $i + 1;
		}

		for ($i=1; $i<=408; $i++){
			$volcado = $volcado . $special_char[array_rand($special_char,1)];
			
		}

		
		$id_span = array('wfirst','wsecond','wthird','wfourth','wfifth','wsixth');

		$random_pos = 0;
		$choosen_word_array_leng = count($choosen_word_array);
		for ($i=0;$i<$choosen_word_array_leng;$i++){
			$l = 0;
			$not_special_char = 0;
			$leng_word = strlen($choosen_word_array[$i]);
			$random_pos = rand(1,total_char-$leng_word);
			$array_split = str_split(substr($volcado,$random_pos-1,$leng_word+2));

			foreach ($array_split as $caracter) {
				if (!in_array($caracter, $special_char)) {
					$not_special_char=$not_special_char+1;
				}
				
			}

			$word = $choosen_word_array[$i];

			if ($not_special_char == 0) {
				$volcado = substr_replace($volcado, "<span id='".$id_span[$l]."'>".$word."</span>", $random_pos,$leng_word);
				$l = $l + 1;
			}else{
				$i = $i-1;
			}
		}
	

	

		




		// Mostrem les paraules per pantalla.
		echo '<div id="box1">';
		echo '<div id="box2">';


		$arrayDirecciones1 = array("0xF91C", "0xF928", "0xF934", "0xF940", "0xF94C", "0xF958", "0xF964", "0xF970", 
									"0xF97C", "0xF988", "0xF994", "0xF9A0", "0xF9AC", "0xF9B8", "0xF9C4", "0xF9D0", "0xF9DC");

		$arrayDirecciones2 = array("0xF9E8", "0xF9F4", "0xFA00", "0xFAFC", "0xFA18", "0xFA24", "0xFA30", "0xFA3C", 
									"0xFA48", "0xFA54", "0xFA60", "0xFA6C", "0xF978", "0xFA84", "0xFA90", "0xFA9C", "0xFAA8");

		$attemptsLeft = 5;


		echo '<h4>ROBCO INDUSTRIES (TM) TERMLINK PROTOCOL</h4>';
		echo '<h4>ENTER PASSWORD NOW</h4>'; 
		echo "<h4>$attemptsLeft ATTEMPT(S) LEFT:	"; 
		echo '<progress id="progressBar"></progress></h4>';

		// I create the table.
		echo '<table id="table1">';
		echo '<tbody>';

		// I create every row iterating.
		for($i=0; $i < 17; $i++) {

			echo '<tr>';

			$direction1 = $arrayDirecciones1[$i];
			$direction2 = $arrayDirecciones2[$i];

			echo '<th class="column1" align="left">';
			echo "$direction1</th>";
			echo '<th class="column2"></th>';
			echo '<th class="column1" align="left">';
			echo "$direction2</th>";
			echo '<th class="column2"></th>';

			echo '</tr>';
		}

		echo '</tbody>';
		echo '</table>';

		echo $volcado;
		

		echo "</div>";
		echo "</div>";
	?>

</body>
</html>