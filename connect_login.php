<?php
// Identifiants de connexions avec adresse du serveur, utilisateur,
// mot de passe, nom de la base de données
$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="projet";


//Tous les éléments nécessaires à la connexion sont mis dans une fonction
//connect
$dblink=mysql_connect($dbhost,$dbuser,$dbpassword);

//Connexion à la base de données sélectionnée
$db=mysql_select_db($dbname,$dblink);

//Fonction écrivant un message d'erreur en cas de DB inexistante ou autre 
//problème de connexion à celle-ci 
function qdb($sql)
{
$resultat = mysql_query($sql);
if (mysql_errno())
{
echo "MySQL error ".mysql_errno()." : ".mysql_error()."\n<br> REESSAYER";
die;
}
return $resultat;
}
?>