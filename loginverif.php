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
       echo "Authentification reussie";
       echo "<a href='index.php'><button>Retour a l'accueil</button></a>";
      include("entete.php");
  }
   else {
       echo 'login incorrect'; 
       echo "<p><a href='login.php'><button>Reessayez</button></a></p>";
       include("entete.php");
  }
 ?>
