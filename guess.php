<html>
	<head>
		<title>Guessing Game for Iuliia Zemliana (1ef91c21)</title>
	</head>
	<body>
		<h1>Welcome to my guessing game</h1>
		<p>
			<?php 
				if( ! isset($_GET['guess']) ) {
					echo("Missing guess parameter");
				}else if( ! is_numeric($_GET['guess']) ) {
					echo("Your guess is not a number");
				} else if($_GET['guess'] < 62){
					echo("Your guess is too low");
				} else if($_GET['guess'] > 62){
					echo("Your guess is too high");
				} else {
					echo("Congratulations - You are right");
				}
			?>
		</p>
	</body>
</html>
  