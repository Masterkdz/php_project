<?php
require_once("connect_login.php");
include("session_start.php");
include("entete.php");
include("menu.php");
if(!isset($_SESSION['pagebestiaire'])){
	$_SESSION['pagebestiaire']=1;
	$_SESSION['typearticle']='articlesbestiaire'; //le type d'article qui sera demander par la requete SQL de article.php
}

for($i=$_SESSION['pagebestiaire'];$i<$_SESSION['pagebestiaire']+4;$i++){
	echo "<div class='bestiaire'>";
	echo "<a class='bestiaire' href='article.php?id=".$i."'>"; 
	$sql="SELECT titre FROM articlesbestiaire WHERE id =$i";
	$resultat=qdb($sql);
	while ($row = mysql_fetch_assoc($resultat)) {
		echo $row["titre"];
	}
	// mysql : titre de l'article (+photo) (l'id de l'article est $i)
	echo "</div><br/>";
}

$_SESSION['pagebestiaire']=$_SESSION['pagebestiaire']+4;
	if ($_SESSION['pagebestiaire']>1){
    	if($_SESSION['pagebestiaire']>4){
    		$_SESSION['pagebestiaire']=$_SESSION['pagebestiaire']-4;}
    else {$_SESSION['pagebestiaire']=1;}
    echo "<a title='Precedent' href='bestiaire.php'>Page pr&eacute;c&eacute;dente </a>";
}


/* if($_SESSION)['pagebestiaire']</*mysql : compter le nb d'entrées dans la table articlesbestaire  {
	echo "<a href'bestiaire.php'>Page suivante.</a>"
	} */
?>