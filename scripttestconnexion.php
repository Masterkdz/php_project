<?php
session_start();
$login = (isset($_POST['login'])) ? $_POST['login'] : '';
$pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';
if (($login == "Jean") && ($pass == "Dupont")){
// sauvegarde de l'identifiant et du mot de passe dans la session
$_SESSION['login'] = $login;
$_SESSION['password'] = $pass;
echo '<a href="accueil.php" title="Accueil membre">Accueil</a>';
}else{
// une erreur de saisie ...?
echo 'Erreur de connexion.’;
}
?>