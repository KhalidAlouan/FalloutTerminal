<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>You won</title>
	<link rel="stylesheet" type="text/css" href="win.css">
	<script type="text/javascript" src="win.js"></script>
</head>
<body>



	<div id="prim">

	<h3>You won!!!</h3>
	<?php
		$mostrar = $_GET['w1'];
		$min = $_GET['min'];
		$sec = $_GET['sec'];
		echo '<h4>Intents: ';
		echo "$mostrar, $min, $sec";
		echo '</h4>';
	?>
	<h4>You must introduce the user name</h4> 
	<h4>for recording your position at the ranking.</h4>
	<input id="nomUsuari" type="text"></input>

	<?php
		echo '<input id="btnSend" type="button" value="Send!" onclick="envia('.$mostrar.', '.$min.', '.$sec.');"></input><br/><br/><br/><br/>';
	?>

	</div>

	<div id="divImg">

		<img src="win.gif" alt="Congratulations!">

	</div>


</body>
</html>