<html>
<head><title>Identification</title></head>

<?php

include("menu.php");
require_once("connect_login.php");
require_once("session_start.php");

$pseudo=$_POST["pseudo"];
$motdepasse=$_POST["motdepasse"];
$motdepasse=hash("whirlpool","$motdepasse");
 
 $sql = "SELECT * FROM identifiants WHERE pseudo = '$pseudo' AND motdepasse = '$motdepasse' "; 
 $query = mysql_query($sql);
 
 
  if ( mysql_num_rows($query)===1 ) {
       $_SESSION["pseudo"]=$pseudo;
       $_SESSION["motdepasse"]=$motdepasse;
       echo "<table  align='center' border='0'><tr><td>Authentification reussie</td></tr>";
       echo "<tr><th><a href='index.php'><button>Retour a l'accueil</button></a></th></tr></table>";
      include("entete.php");
  }
   else {
       echo 'login incorrect'; 
       echo "<p><a href='login.php'><button>Reessayez</button></a></p>";
       include("entete.php");
  }
 ?>
