
<html>
<head><title>Livre d'Or</title></head>
<?php
include('entete.php');
include ('menu.php');


	echo "<h1>Bienvenue sur notre Livre D'or! </h1>
			<form action='livreor.php' method='post'>
<p  style='font-family:Commons; text-align:center ;color : white'> Pseudo      : <input type='text' name='pseudo'>
<p  style='font-family:Commons; text-align:center ;color : white'> Commentaire : <TEXTAREA name='commentaire' placeholder='Votre commentaire...'>
</TEXTAREA></br>
<input type='submit' value='Ajouter'>
</form>
";
?>
