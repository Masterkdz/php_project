<html>
<head><title>Identification</title></head>

<?php
//include("menu.php");
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
        include("entete.php");
        include("menu.php");
       echo "<p class='p1'>Authentification reussie</p>";
       echo "<p class='centrer'><a href='index.php' class='bouton'>Retour a l'accueil</a>";
      
  }
   else {
      include("entete.php");
      include("menu.php");
       echo "<p class='p1'>login incorrect</p>"; 
       echo "<p class='centrer'><a href='index.php' class='bouton'>Reessayez</a></p>";
       
  }
 ?>
