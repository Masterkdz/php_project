<?php
require_once("connect_login.php");
require_once("session_start.php");
if (isset($_SESSION['pseudo']) && isset($_SESSION['motdepasse'])){
	echo "
	Bienvenue ".$_SESSION['pseudo']."<a href='deconnexion.php'>Deconnexion</a>";
}
else {
	echo "<div class='login'>
		<form action='loginverif.php' method='post'>
		
			Pseudo : <input type='text' name='pseudo' placeholder='Votre pseudo'>
		

			Mot de passe : <input name='motdepasse' type='password' placeholder='********'>
		
			<input type='submit' name='valider' value='Connexion'>
		
		</form>
	</div>";
}
?>