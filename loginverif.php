<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="icon" type="image/png" href="/img/game_pad.png" />
</head>
<body>
  <a href="index.php"><img src="img/image_accueil.jpg" height="150" width="300"></a>
  

  <table align="right" class="tablelogin" border="0">
    <form action="loginverif.php" method="post">
    <tr>
      <td>Pseudo : </td><td><input type="text" name="pseudo" placeholder="Votre pseudo"></td>
    

      <td>Mot de passe : </td><td><input name="motdepasse" type="password" placeholder="********"></td>
    
      <td><input type="submit" name="valider" value="Connexion"></td>
    </tr>
    </form>
  </table>


<nav>
  <ul>
    <a href='index.php'><li><img src="img/testcaret.png">Accueil</li></a>
    <a href='#'><li><img src="img/testcaret.png">Nouveaut&eacute;s</li></a>
    <a href='#'><li><img src="img/testcaret.png">Bestiaire</li></a>
    <a href='#'><li><img src="img/testcaret.png">Boutique</li></a>
    <a href='#'><li><img src="img/testcaret.png">Extras</li></a>
    <a href='livreor.htm'><li><img src="img/testcaret.png">Livre d'or</li></a>
    <a href='#'><li><img src="img/testcaret.png">Contact</li></a>
    <a href='pageinscription.php'><li><img src="img/testcaret.png">Inscrivez-vous</li></a>
</nav>
<?php
require_once("connect_login.php");
$pseudo=$_POST["pseudo"];
$motdepasse=$_POST["motdepasse"];
$motdepasse=hash("whirlpool","$motdepasse");
 
 $sql = "SELECT * FROM identifiants WHERE pseudo = '$pseudo' AND motdepasse = '$motdepasse' "; 
 $query = mysql_query($sql);
 
 
  if ( mysql_num_rows($query) === 1 ) {
       echo "<table  align='center' border='0'><tr><td>Authentification reussie</td></tr>";
       echo "<tr><th><a href='index.php'><button>Retour a l'accueil</button></a></th></tr></table>";
       //$pseudo=$_SESSION["pseudo"];
       //$motdepasse=$_SESSION["motdepasse"];
  }
   else {
       echo 'login incorrect'; 
       echo "<p><a href='login.php'><button>Reessayez</button></a></p>";
  }
 ?>
</body>
</html>