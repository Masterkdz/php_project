<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<table border="0">
	<form method="POST" action="inscription.php">
		<tr>
			<td>Choisissez un pseudo : </td>
			<td><input type="TEXT" name="pseudo" placeholder="Pseudo"></td>
		</tr>
		<tr>
			<td>Choisissez un mot de passe : </td>
			<td><input type="password" name="motdepasse" placeholder="********" ></td>
		</tr>
		<tr>
			<td>Confirmation du mot de passe : </td>
			<td><input type="password" name="motdepasse2" placeholder="********"></td>
		</tr>
		<tr>
			<td>Adresse E-mail : </td>
			<td><input type="text" name="email" placeholder="adresse@domaine.bla"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="valider" value="Valider"></td>
		</tr>
	</form>
	</table>

</body>
</html>