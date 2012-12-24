<html>
<head><title>Livre d'or</title></head>

<?php
require_once("connect_login.php");
include("entete.php");
include ("menu.php");
$pseudo=$_POST['pseudo'];
$commentaire=$_POST['commentaire'];


$sql="INSERT INTO livreor (id, pseudo, commentaire)
VALUES ('','$pseudo$','$commentaire')";
$resultat=qdb($sql);



echo "<p style='text-align:left ;color : white'>"; echo"Votre commentaire a bien &eacute;t&eacute; ajout&eacute;";
echo "<br><br><a href='index.php' style='align-text:left'>Retour a l'acceuil</a>";
?>







