<title>Le Phenix</title>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
$sql="SELECT article FROM articlesbestiaire WHERE titre = 'phenix';";
$query=mysql_query($sql);
while ($row = mysql_fetch_assoc($query)) {
echo $row["article"]." <br><a href='Bestiaires.php'>Retour au bestiaire</a>";
}
?>