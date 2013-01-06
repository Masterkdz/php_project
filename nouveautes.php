<title>Nouveaut&eacute;s</title>
<?php
require_once("connect_login.php");
include("session_start.php");
include("entete.php");
include("menu.php");
if(!isset($_SESSION['pagenouveautes'])){
	$_SESSION['pagenouveautes']=1;
	
}
$_SESSION['typearticle']='articlesnouveautes'; //le type d'article qui sera demander par la requete SQL de article.php
echo "<div class='aligntop'>";
for($i=$_SESSION['pagenouveautes'];$i<$_SESSION['pagenouveautes']+4;$i++){
	echo "<div class='bestiaire'>";
	echo "<img src='img/puce2.png'>  <a class='bestiaire'href=article.php?id=".$i.">";
	$sql="SELECT titre FROM articlesnouveautes WHERE id =$i";
	$resultat=qdb($sql);
	while ($row = mysql_fetch_assoc($resultat)) {
		echo $row["titre"]; 
	}
	// mysql : titre de l'article (+photo) (l'id de l'article est $i)
	echo "</div><br/>";
}
echo"</div>";

/* $_SESSION['pagenouveautes']=$_SESSION['pagenouveautes']+4;
	if ($_SESSION['pagenouveautes']>1){
    	if($_SESSION['pagenouveautes']>4){
    		$_SESSION['pagenouveautes']=$_SESSION['pagenouveautes']-4;}
    else {$_SESSION['pagenouveautes']=1;
    echo "<a href='nouveautes.php'>Page pr&eacute;c&eacute;dente </a>";}
} */


/* if($_SESSION)['pagenouveautes']</*mysql : compter le nb d'entrées dans la table articlesbestaire  {
	echo "<a href'bestiaire.php'>Page suivante.</a>"
	} */
?>