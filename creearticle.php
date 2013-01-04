<title>Cr&eacute;ation d'articles</title>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
if (isset($_SESSION['pseudo']) && $_SESSION["pseudo"]=="Admin2"){
	if (!isset($_POST['titre']) || !isset($_POST['article'])){?>
	<form method="POST" action="creearticle.php">
		<div class="article"><h3>Type de l'article : </h3><br><input type="radio" name="typearticle" value="bestiaire"><div class="p1">Bestiaire</div><br>
									<input type="radio" name="typearticle" value="nouveautes"><div class="p1">Nouveaut&eacute;s</div><br><br><br>
		
		<div class="p1">Titre : <br><input type="text" name="titre" placeholder="Titre de l'article"></div><br><br>
		<div class="p1">Article : <br><TEXTAREA name="article" rows="25" cols="100">
		</TEXTAREA></div><br><br><br>
		<div class="p1"><input type="submit" name="enregistrer" value="enregistrer">
		(NB: inclure le code HTML lors de la r&eacute;daction de l'article)</div></div>
	</form>

<?php
}
else{
	$titre=$_POST["titre"];
	$article=$_POST["article"];
	$typearticle=$_POST["typearticle"];
	if ($typearticle=="nouveautes"){
		$sql="INSERT INTO articlesnouveautes VALUES ('','$titre','$article')";
		$resultat=qdb($sql);
	}
	elseif($typearticle=="bestiaire"){
		$sql="INSERT INTO articlesbestiaire VALUES ('','$titre','$article')";
		$resultat=qdb($sql);
	}
	echo "<p class='centrer'>Article enregistr&eacute; ! </p>";
	
}
}
else{
	echo "<p class='centrer'>Vous n'avez pas les droits d'acc&eacute;der &agrave; cette page.</p>";

}
?>
