<html>
<head><title>Livre d'or</title></head>

<?php
require_once("connect_login.php");
include("entete.php");
include ("menu.php");
$pseudo=$_POST['pseudo'];
$commentaire=$_POST['commentaire'];


$sql="INSERT INTO livreor (id, pseudo, commentaire)
VALUES ('','$pseudo','$commentaire')";
$resultat=qdb($sql);



echo "<p class='p1'>"; echo"Votre commentaire a bien &eacute;t&eacute; ajout&eacute;</p>";
echo "<p class='centrer'><a href='index.php' class='bouton'>Retour a l'acceuil</a></p>";

?>







