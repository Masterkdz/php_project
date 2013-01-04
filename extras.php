<title>Extras</title>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");

echo "<h1>Vous trouverez ici divers extras que nous offrons aux membres inscrits!</h1>";
if (isset($_SESSION['pseudo'])){
echo "<p><a href='classgenerator.php'>
	Cliquez ici pour acc&eacute;der au premier ClassGenerator du jeu : Call of Duty 4 - Modern Warfare!</a></p>";
}
else{
	echo "<p class=centrer>Vous n'&ecirc;tes apparemment pas inscrit ou bien non authentifi&eacute;. Cliquer <a href=pageinscription.php>ici</a> pour vous inscrire ou <a href=login.php>ici</a> pour vous logguer!</p>";
}
?>