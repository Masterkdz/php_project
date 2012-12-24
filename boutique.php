<html>
<head><title>Boutique</title></head>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");




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

