<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");
if (!isset($_POST['titre']) || !isset($_POST['article'])){?>
	<form method="POST" action="creearticle.php">
		<p>Titre : <input type="text" name="titre" placeholder="Titre de l'article"></p>
		<p>Article : <TEXTAREA name="article" placeholder="Votre Article...">
		</TEXTAREA></p>
		<p><input type="submit" name="enregistrer" value="enregistrer"></p>
		<p>Type de l'article : <br><input type="radio" name="typearticle" value="bestiaire">Bestiaire<br>
									<input type="radio" name="typearticle" value="nouveautes">Nouveaut&eacute;s<br>
		</p>
	</form>

<?php
}
else{
	$titre=$_POST["titre"];
	$article=$_POST["article"];
	$typearticle=$_POST["typearticle"];
	if ($typearticle="nouveautes"){
		$sql="INSERT INTO articlesnouveautes VALUES ('','$titre','$article')";
		$resultat=qdb($sql);
	}
	else{
		$sql="INSERT INTO articlesbestiaire VALUES ('','$titre','$article')";
		$resultat=qdb($sql);
	}
	echo "<p class='centrer'>Article enregistr&eacute; ! </p>";
	
}