<!doctype html>
<html>
<head><title>Index</title></head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="icon" type="image/png" href="/img/game_pad.png" />
<link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
<body>
<a href="index.php"><img src="img/image_accueil.jpg" height="150" width="300"></a>
<table align="right" class="tablelogin" border="0">
		<form action="loginverif.php" method="post">
		<tr>
			<td>Pseudo : </td><td><input type="text" name="pseudo" placeholder="Votre pseudo"></td>
		

			<td>Mot de passe : </td><td><input name="motdepasse" type="password" placeholder="********"></td>
		
			<td><input type="submit" name="valider" value="Connexion"></td>
		</tr>
		</form>
	</table>

<?php
include("menu.php");
echo "<h1>Acceuil !</h1>";?>
<p style="font-family:Commons; font-size:60px ;text-align:center ; color : white">


Bienvenu sur notre site, nous espérons que vous trouverez tout ce qui vous interesse




</p>
</body>
</html>