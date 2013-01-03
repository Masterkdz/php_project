<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
$sql="SELECT article FROM articlesbestiaire WHERE id = 1";
$resultat=qdb($sql);
while ($row = mysql_fetch_assoc($resultat)) {
echo $row["article"]; 
}
?>