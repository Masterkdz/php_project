<?php
include("session_start.php")
include("entete.php");
include("menu.php");
if(!isset($_SESSION['pagebestiaire'])){
	$_SESSION['pagebestiare']=1;
	$_SESSION['typearticle']='artcilesbestiaire'; //le type d'article qui sera demander par la requete SQL de article.php
}

for($i=$_SESSION['pagebestiaire'];$i<$_SESSION['pagebestiaire']+5;$i++){
	echo "<a href=article.php?id=".$i; 
	echo ""; // mysql : titre de l'article (+photo) (l'id de l'article est $i)
	echo "<br/>"
}
$_SESSION['pagebestiaire']=$_SESSION['pagebestiaire']+5;
if ($_SESSION['pagebestiaire']>1){
	$_SESSION['pagebestiaire']=$_SESSION['pagebestiaire']-5;
	echo "<a href='bestiaire.php'>Page précédente </a>";
}
if($_SESSION)['pagebestiaire']</*mysql : compter le nb d'entrées dans la table articlesbestaire */ {
	echo "<a href'bestiaire.php'>Page suivante.</a>"
	}
?>