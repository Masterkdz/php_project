<html>
<head><title>Identification</title></head>

<?php
//include("menu.php");
require_once("connect_login.php");
require_once("session_start.php");

if(isset($_POST["pseudo"]) && isset($_POST["motdepasse"]) && $_POST["pseudo"]!="" && $_POST["motdepasse"]!="" ) {
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
         echo "<p class='centrer'>Authentification reussie</p>";
         echo "<p class='centrer'><a href='index.php' class='bouton'>Retour a l'accueil</a>";
        
    }
     else {
        include("entete.php");
        include("menu.php");
         echo "<p class='centrer'>login incorrect</p>"; 
         echo "<p class='centrer'><a href='login.php' class='bouton'>Reessayez</a></p>";
         
     }
}
else {
  include("entete.php");
  include("menu.php");
?>
<p class='p1'>Veuillez entrer un login et un mot de passe</p>
<p class='centrer'><a href='login.php' class='bouton'>Reessayer</a></p>
<?php
}
   ?>
