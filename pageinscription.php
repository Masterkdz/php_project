<html>
<head><title>Inscription</title></head>

	<?php 
require_once("connect_login.php");
include("entete.php");
include("menu.php");



	if(!isset($_POST['email']) || !isset ($_POST['pseudo']) || !isset($_POST['motdepasse']) || !isset($_POST['motdepasse2']) || $_POST['motdepasse2']!=$_POST['motdepasse'] || $_POST['pseudo']=='' || $_POST['motdepasse']=='' || $_POST['email']=='') { ?>
	<table>
	<form method="POST" action="pageinscription.php">
		<tr>
			<?php  //si le pseudo n'est pas renseigné
				if (isset($_POST['pseudo']) && $_POST['pseudo']=='') {
					echo '<tr><td class="erreur">Veuillez renseigner un pseudo</td></tr>';
				}

			?>
			<td>Choisissez un pseudo : </td>
			
			<td><input type="TEXT" name="pseudo" placeholder="Pseudo"></td>
		</tr>
		<tr>
		<?php 
		$taille_min=6;
		 //si le mot de passe n'est pas renseigné
				if (isset($_POST['motdepasse']) && $_POST['motdepasse']=='') {
					echo '<tr><td class="erreur">Veuillez renseigner un mot de passe</td></tr>';
				}
				elseif (isset($_POST['motdepasse']) && strlen($_POST['motdepasse'])<6){
					echo '<tr><td class="erreur">Le mot de passe doit contenir au moins 6 caract&egrave;res</td></tr>';
				}
			?>
			<td>Choisissez un mot de passe : </td>
			
			<td><input type="password" name="motdepasse" placeholder="mot de passe" ></td>
		</tr>
		<tr>
			<?php  //si le mot de passe de confirmation n'est pas égal au mdp
				if (isset($_POST['motdepasse2']) && isset($_POST['motdepasse']) && $_POST['motdepasse2']!=$_POST['motdepasse']) {
					echo '<tr><td class="erreur">La confirmation ne correspond pas au mot de passe.</td><tr>';
				}
			?>
			<td>Confirmation du mot de passe : </td>
			
			<td><input type="password" name="motdepasse2" placeholder="mot de passe"></td>
		</tr>
		<tr>
			<?php  //si l'email n'est pas renseigné
				if (isset($_POST['email']) && $_POST['email']=='') {
					echo '<tr><td class="erreur">Veuillez renseigner un email</td></tr>';
				}
			?>
			<td>Adresse E-mail : </td>
			
			<td><input type="text" name="email" placeholder="adresse@domaine.tld"></td>
		</tr>
		<tr>
			<td><input type="submit" name="valider" value="Valider"></td>
		</tr>
	</form>
	</table>
<?php
}

else {
	$pseudo=$_POST['pseudo'];
	$motdepasse=$_POST['motdepasse'];
	$email=$_POST['email'];
	echo "<p class='centrer'>Inscription Envoy&eacute;e</p><br>";
	echo "<p class='centrer'><a href='index.php' class='bouton'>Retour a l'accueil</a></p>";
	$motdepasse=hash("whirlpool","$motdepasse");
	$sql="INSERT INTO identifiants VALUES ('', '$pseudo','$motdepasse','$email','utilisateur')";
	$resultat=qdb($sql);
}

?>

</body>
</html>