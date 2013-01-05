<title>Deconnect&eacute;</title>
<?php
include("entetedeco.php");
include("menudeco.php");
require_once("connect_login.php");
session_destroy();
echo "<p class='centrer2'>Vous &ecirc;tes d&eacute;connect&eacute;!</p>";
echo "<p class='centrer'><a class='bouton' href='index.php'>Retour &agrave; l'accueil</a></p>";
?>