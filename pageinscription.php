<!doctype html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<?php 
require_once("connect_login.php");

	if(!isset($_POST['email']) || !isset ($_POST['pseudo']) || !isset($_POST['motdepasse']) || !isset($_POST['motdepasse2']) || $_POST['motdepasse2']!=$_POST['motdepasse'] || $_POST['pseudo']=='' || $_POST['motdepasse']=='' || $_POST['email']=='') { ?>
	<table border="0">
	<form method="POST" action="pageinscription.php">
		<tr>
			<td>Choisissez un pseudo : </td>
			<?php  //si le pseudo n'est pas renseigné
				if ($_POST['pseudo']=='') {
					echo '<td><p class="erreur">Veuillez renseigner un pseudo</p></td>';
				}
			?>
			<td><input type="TEXT" name="pseudo" placeholder="Pseudo"></td>
		</tr>
		<tr>
			<td>Choisissez un mot de passe : </td>
			<?php  //si le mot de passe n'est pas renseigné
				if ($_POST['motdepasse']=='') {
					echo '<td><p class="erreur">Veuillez renseigner un mot de passe</p></td>';
				}
			?>
			<td><input type="password" name="motdepasse" placeholder="mot de passe" ></td>
		</tr>
		<tr>
			<td>Confirmation du mot de passe : </td>
			<?php  //si le mot de passe de confirmation n'est pas égal au mdp
				if ($_POST['motdepasse2']!=$_POST['motdepasse']) {
					echo '<td><p class="erreur">La confirmation ne correspond pas au mot de passe.</p></td>';
				}
			?>
			<td><input type="password" name="motdepasse2" placeholder="mot de passe"></td>
		</tr>
		<tr>
			<td>Adresse E-mail : </td>
			<?php  //si l'email n'est pas renseigné
				if ($_POST['email']=='') {
					echo '<td><p class="erreur">Veuillez renseigner un email</p></td>';
				}
			?>
			<td><input type="text" name="email" placeholder="adresse@domaine.tld"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="valider" value="Valider"></td>
		</tr>
	</form>
	</table>
<?php
}

else { //est exécuté si tous les chams sont remplis et le mot de passe et la confirmation correspondent
	$pseudo=$_POST["pseudo"];
	$motdepasse=hash("whirlpool",$_POST["motdepasse"]);
	$email=$_POST["email"];
	$sql="INSERT INTO identifiants VALUES ('', '$pseudo','$motdepasse','$email')";
	$resultat=qdb($sql);

	echo 'inscription envoyée';

}

?>

</body>
</html>