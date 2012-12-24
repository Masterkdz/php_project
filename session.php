<?php
require_once("connect_login.php");
require_once("session_start.php");
if (isset($_SESSION['pseudo']) && isset($_SESSION['motdepasse'])){
	echo "<table align='right' class='tablelogin' border='0' >
	<tr><th>Bienvenue ".$_SESSION['pseudo']."</th><td><a href='deconnexion.php'>Deconnexion</a></td></tr></table>";
}
else {
	echo "<table align='right' class='tablelogin' border='0'>
		<form action='loginverif.php' method='post'>
		<tr>
			<td>Pseudo : </td><td><input type='text' name='pseudo' placeholder='Votre pseudo'></td>
		

			<td>Mot de passe : </td><td><input name='motdepasse' type='password' placeholder='********'></td>
		
			<td><input type='submit' name='valider' value='Connexion'></td>
		</tr>
		</form>
	</table>";
}
?>