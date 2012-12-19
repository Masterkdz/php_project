<html>
<head><title>Boutique</title></head>
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

<nav>
	<ul>
		<a href='index.php'><li><img src="img/testcaret.png">Accueil</li></a>
		<a href='#'><li><img src="img/testcaret.png">Nouveaut&eacute;s</li></a>
		<a href='Bestiaires.html'><li><img src="img/testcaret.png">Bestiaire</li></a>
		<a href='Boutique.html'><li><img src="img/testcaret.png">Boutique</li></a>
		<a href='#'><li><img src="img/testcaret.png">Extras</li></a>
		<a href='livreor.htm'><li><img src="img/testcaret.png">Livre d'or</li></a>
		<a href='contact.html'><li><img src="img/testcaret.png">Contact</li></a>
		<a href='pageinscription.php'><li><img src="img/testcaret.png">Inscrivez-vous</li></a>
</nav>













<html>


<body>
<p style="font-family:Commons; font-size:60 ;text-align:center ; color : white">    Boutique      </p>
</html>





<?php




require_once("connect_db.php");




$nom=$_POST['nom']; 
$prenom=$_POST['prenom'];
$TA=$_POST['TA']; 
$TB=$_POST['TB'];
$TC=$_POST['TC'];
$TD=$_POST['TD'];



$sql="INSERT INTO Tshirt (TshirtHill, TshirtGears, TshirtWar, TshirtEvil, nom, prenom, id)
VALUES ('$TA','$TB','$TC','$TD','$nom','$prenom','')";
$resultat=qdb($sql);  


echo "<p style='text-align:left ;color : white'>"; echo"Bonjour $nom $prenom,"; echo"</br>";

echo "<p style='text-align:left ;color : white'>" ;echo" Vous avez choisis $TA T-shirtHill"; echo"</br>";
echo "<p style='text-align:left ;color : white'>"; echo" Vous avez choisis $TB T-shirtGears"; echo"</br>";
echo "<p style='text-align:left ;color : white'>" ;echo" Vous avez choisis $TC T-shirtWar"; echo"</br>";
echo "<p style='text-align:left ;color : white'>" ;echo" Vous avez choisis $TD T-shirtEvil"; echo"</br>";echo"</br>";echo"</br>";

echo "<p style='text-align:left ;color : white'>"; echo" Vos choix ont bien été pris en compte" ;echo"</br>";echo"</br>";echo"</br>";

?>


<html>
<body> 

Choisissez votre mode de paiement :

<form action="Boutique2.php" method="POST">

<p style="text-align:left ;color : white"> Carte bleu <input type="radio" name="carte" value="carte bleu">
<p style="text-align:left ;color : white"> Paypal     <input type="radio" name="carte" value="paypal"> 
<input type="submit" value="Envoyer">

</form>

</body>
</html>

