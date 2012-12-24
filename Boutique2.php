<html>
<head><title>Boutique</title></head>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
$carte=$_POST['carte'] ;





echo "<p style='text-align:left ;color : white'>"; echo "Vous avez choisis la carte $carte , entrez votre numéro de carte ";

echo '<form action="boutique3.php" method="POST">' ;


echo "<p style='text-align:left ;color : white'>"; echo "Numero de carte"; echo'<input type="text" name="cartebleu">'; echo "</br>"; echo "</br>";
echo'<input type="submit" value="Envoyer">';
echo '</form>';
   echo "<p style='text-align:left ;color : white'>" ; echo"Cocher votre mode de payement" ;



?>
