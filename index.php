<!doctype html>
<html>
<head><title>Site du projet</title></head>
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
echo "<h1>It works!</h1>";?>
<p>
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
</p>
</body>
</html>