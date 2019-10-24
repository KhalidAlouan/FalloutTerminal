<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lose.css">
	<script type="text/javascript" src="lose.js"></script>
	<title>You lose</title>
</head>
<body>

		<div id="prim">
		<h3>You lose :'(</h3>
		<?php
			$mostrar = $_GET['w1'];
			$min = $_GET['min'];
			$sec = $_GET['sec'];
			echo "<h4>Temps: $min:$sec";
			echo '</h4>';
		?>
		<h4>I'm sorry, you lost, try again.</h4>
		<?php
			echo '<input id="btnHome" type="button" value="Home" onclick="home()"></input>';
		?>
	</div>

	<div id="divImg">

		<img src="vaultFail.png" alt="Sorry!">

	</div>


</body>
</html>