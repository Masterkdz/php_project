<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
?>
<title><?php
$idArticle=$_GET['id'];
$typeArticle=$_SESSION['typearticle'];
$sql="SELECT titre FROM $typeArticle WHERE id =$idArticle";
$resultat=qdb($sql);
while ($row = mysql_fetch_assoc($resultat)) {
echo $row["titre"]; 
}
?>
</title>
<h1><?php
$idArticle=$_GET['id'];
$typeArticle=$_SESSION['typearticle'];
$sql="SELECT titre FROM $typeArticle WHERE id =$idArticle";
$resultat=qdb($sql);
while ($row = mysql_fetch_assoc($resultat)) {
echo $row["titre"]; 
}
?>
</h1>
<div class="article">
<?php
$idArticle=$_GET['id'];
$typeArticle=$_SESSION['typearticle'];
$sql="SELECT article FROM $typeArticle WHERE id =$idArticle";
$resultat=qdb($sql);
while ($row = mysql_fetch_assoc($resultat)) {
echo $row["article"]; 
}
?>
</div>