<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<?php if(!isset ($_POST['pseudo']) || !isset($_POST['motdepasse']) || !isset($_POST['motdepasse2']) || $_POST['motdepasse2']!=$_POST['motdepasse'] || $_POST['pseudo']=='' || $_POST['motdepasse']=='') { ?>
	<table border="0">
	<form method="POST" action="pageinscription.php">
		<tr>
			<td>Choisissez un pseudo : </td>
			<td><input type="TEXT" name="pseudo" placeholder="Pseudo"></td>
		</tr>
		<tr>
			<td>Choisissez un mot de passe : </td>
			<td><input type="password" name="motdepasse" placeholder="mot de passe" ></td>
		</tr>
		<tr>
			<td>Confirmation du mot de passe : </td>
			<td><input type="password" name="motdepasse2" placeholder="mot de passe"></td>
		</tr>
		<tr>
			<td>Adresse E-mail : </td>
			<td><input type="text" name="email" placeholder="adresse@domaine.tld"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="valider" value="Valider"></td>
		</tr>
	</form>
	</table>
<?php
}

else echo 'inscription envoyée';

?>

</body>
</html>