<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="icon" type="image/png" href="/img/game_pad.png" />
<link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
<body>
<?php

require_once("connect_login.php");
require_once("session_start.php");
echo "<div class='login'>
		<form action='loginverif.php' method='post'>
		
			Pseudo : <input type='text' name='pseudo' placeholder='Votre pseudo'>
		

			Mot de passe : <input name='motdepasse' type='password' placeholder='********'>
		
			<input type='submit' name='valider' value='Connexion'>
		
		</form>
	</div>";
?>
<a href="index.php"><img src="img/image_accueil.jpg" height="150" width="300"></a>