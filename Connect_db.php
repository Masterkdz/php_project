<?php



$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="boutique";

$dblink=mysql_connect($dbhost,$dbuser,$dbpassword);

$db=mysql_select_db($dbname,$dblink);

function qdb($sql)
{
    $resultat = mysql_query($sql);
	if (mysql_errno())
	{
	   echo"MySQL error ".mysql_errno()." : ".mysql_error()."\n<br>";
	   echo "Requête MySQL : ".$sql."\n<br>";
	   die;
	}
	return $resultat;
}

?>
