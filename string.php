<!DOCTYPE html>
<html>
<head>
	<title>String 354</title>
	<?php
		$special_characters = array('!','"','#','$','%','&','(',')','*','+',',','-','.','/',':',';','<','>','=','?','@','[',']','^','_','`','{','|','~');

		$volcado = "";
		$i = 1;
		for ($i; $i<=354;$i++){
			$volcado = $volcado . $special_characters[array_rand($special_characters,1)];
			
		}

		echo $volcado;

		

	?>
</head>
<body>

</body>
</html>