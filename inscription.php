<?php
require_once("connect_login.php");
$pseudo=$_POST["pseudo"];
if (isset($_POST["motdepasse"])){
	$motdepasse=$_POST["motdepasse"];
}
else {
	echo "Veuillez entrer un mot de passe<br>";
	echo "<a href='pageinscription.php'><button>Retour</button></a>";
}
$motdepasse2=$_POST["motdepasse2"];
$email=$_POST["email"];
function mdp($motdepasse,$motdepasse2,$pseudo,$email){
	if ($motdepasse==$motdepasse2){
		echo "Merci pour votre inscription! Vous pouvez maintenant vous connecter<br>";
		echo "<a href='accueil.php'><button>Accedez au site</button></a>";
		$motdepasse=hash("whirlpool","$motdepasse");
		$sql="INSERT INTO identifiants VALUES ('', '$pseudo','$motdepasse','$email')";
		$resultat=qdb($sql);
	}
	elseif ($motdepasse!=$motdepasse2 || !isset($motdepasse)) {
		echo "Les mots de passe ne correspondent pas, r&eacute;essayez<br>";
		echo "<a href='pageinscription.php'><button>Retour</button></a>";
	}
}

mdp($motdepasse,$motdepasse2,$pseudo,$email);

?>
