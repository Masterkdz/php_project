<html>
<head><title>Boutique</title></head>



<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");

$carte1=$_POST['cartebleu'];
 
if(is_numeric($carte1))
{
echo "<p style='text-align:left ;color : white'>"; echo "Votre numero est valide, votre compte a &eacute;t&eacute; crédit&eacute;.";

}
else { echo "<p style='text-align:left ;color : white'>"; echo"Num&eacute;ro incorrect";}


?>