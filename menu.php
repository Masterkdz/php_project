<?php
if (isset($_SESSION['pseudo']) && $_SESSION['pseudo']=="Admin2"){
	$article="<a href='creearticle.php'><li><img src='img/testcaret.png'>Ecrire un article</li></a>";
}
else{
	$article='';
}
echo"
<nav>
	<ul>
		<a href='index.php'><li><img src='img/testcaret.png'>Accueil</li></a>
		<a href='#'><li><img src='img/testcaret.png'>Nouveaut&eacute;s</li></a>
		<a href='Bestiaire.php'><li><img src='img/testcaret.png'>Bestiaire</li></a>
		<a href='Boutique0.php'><li><img src='img/testcaret.png'>Boutique</li></a>
		<a href='extras.php'><li><img src='img/testcaret.png'>Extras</li></a>
		<a href='livreor2.php'><li><img src='img/testcaret.png'>Livre d'or</li></a>
		<a href='contact.php'><li><img src='img/testcaret.png'>Contact</li></a>
		<a href='pageinscription.php'><li><img src='img/testcaret.png'>Inscrivez-vous</li></a>
".$article."</ul></nav>";
?>
