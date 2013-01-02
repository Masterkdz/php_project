<title>Deconnect&eacute;</title>
<?php
include("entete.php");
include("menu.php");
require_once("connect_login.php");
session_destroy();
echo "Vous &ecirc;tes d&eacute;connect&eacute;!<br>";
echo "<a href='index.php'>Retour &agrave; l'accueil</a>";
?>