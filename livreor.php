<html>
<head><title>Livre d'or</title></head>

<?php
require_once("connect_login.php");
include("entete.php");
include ("menu.php");
if (!isset($_POST['commentaire']) || !isset($_SESSION["pseudo"])){  
  header('Location: livreor2.php');     

}
else{
$pseudo=$_POST['pseudo'];
$commentaire=$_POST['commentaire'];


$sql="INSERT INTO livreor VALUES ('','$pseudo','$commentaire', NOW())";
$resultat=qdb($sql);



echo "<p class='centrer2'>"; echo"Votre commentaire a bien &eacute;t&eacute; ajout&eacute;</p>";
echo "<p class='centrer'><a href='index.php' class='bouton'>Retour a l'acceuil</a></p>";
}
?>







