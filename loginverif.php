<?php
require_once("connect_login.php");
$pseudo=$_POST["pseudo"];
$motdepasse=$_POST["motdepasse"];
$motdepasse=hash("whirlpool","$motdepasse");
 
 $sql = "SELECT * FROM identifiants WHERE pseudo = '$pseudo' AND motdepasse = '$motdepasse' "; 
 $query = mysql_query($sql);
 
 
  if ( mysql_num_rows($query) === 1 ) {
       echo 'Authentification reussie';
       echo "<p><a href='accueil.php'><button>Retour a l'accueil</button></a></p>";
       $pseudo=$_SESSION["pseudo"];
       $motdepasse=$_SESSION["motdepasse"];
  }
   else {
       echo 'login incorrect'; 
       echo "<p><a href='login.php'><button>Reessayez</button></a></p>";
  }
 ?>