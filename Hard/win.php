<?php
	session_start();
?>
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
		echo "<h4>Temps: $min:$sec";
		echo '</h4>';
	?>
	<h4>You must introduce the user name</h4> 
	<h4>for recording your position at the ranking.</h4>
	
	<?php
		echo "<form method='get' action='indexHard.php'>";
		echo "<input id='intentos' name='intentos' value='".$mostrar."' hidden>";
		echo "<input id='min' name='min' value='".$min."' hidden>";
		echo "<input id='sec' name='sec' value='".$sec."' hidden>";
		echo "<input id='nomUsuari' name='nomUsuari' type='text' value='".$_SESSION['winInput']."'></input>";
		
		echo '<input type="submit" id="btnSend"  name="envia" value="Send!" ;"></input><br/><br/><br/><br/>';
		echo "</form>";

		
		
		
	?>

	<?php
		echo '<input id="btnHome" type="button"  value="Home" onclick="home()"></input>';
		
		
	?>

	</div>

	<div id="divImg">

		<img src="https://media.giphy.com/media/SHT4S1lOyAbaa6UvQZ/giphy.gif" alt="Congratulations!">

	</div>


</body>
</html>