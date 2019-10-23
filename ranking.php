<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ranking</title>
	<link rel="stylesheet" type="text/css" href="ranking.css">
</head>
<body>
	<div id="rank">
		<h3> RANKING ORDERED BY INTENTS </h3>
		
		<?php
			
			$fn = fopen("ranking.txt","r");
  
			while(! feof($fn))  {
				$result = fgets($fn);
				$camps = array();
				$camps = explode(";", $result);
				if (isset($camps[0]) && isset($camps[1]) && isset($camps[2]) && isset($camps[3])) {
					$user= $camps[0];
					$intents = $camps[1];
					$min = $camps[2];
					$sec = $camps[3];
					echo "<p> USUARI: $user | INTENTS: $intents | MIN: $min | SEC: $sec</p>";
				}
			}
			fclose($fn);

		?>

	</div>
</body>
</html>