


<link rel='stylesheet' type='text/css'  href='Monstyle.css'>
<title> Dragon </title> </head>

<?php
include("entete.php");
include("menu.php");
require_once("connect_login.php");
$sql="SELECT article FROM articlesbestiaire WHERE titre = 'dragon';";
$query=mysql_query($sql);
while ($row = mysql_fetch_assoc($query)) {
echo $row["article"]." <br><a href='Bestiaires.php'>Retour au bestiaire</a>";
}


?>