<title>Boutique</title>
<?php 
require_once("connect_login.php"); 
include("entete.php");
include("menu.php");




echo" <body style='margin-top:1px'>


<p style='font-family:Commons; font-size:60 ; text-align:center ; color : white ; margin-top:0px'>    Boutique      </p>
<form action='boutique.php' method='POST'>

<p  style='font-family:Commons;  text-align:center ;color : white'> Nom                      <input type='text' name='nom'> </p>
<p  style='font-family:Commons; text-align:center ;color : white'>Prenom                   <input type='text' name='prenom'>

<p  style='font-family:Commons; text-align:center ;color : white'>Ajoutez le nombre de T-shirt choisis :
<p  style='font-family:Commons; text-align:center ;color : white'>T-shirtHill                <input type='text' name='TA'>
<p  style='font-family:Commons; text-align:center ;color : white'>T-shirtGears               <input type='text' name='TB'>
<p  style='font-family:Commons; text-align:center ;color : white'>T-shirtWar                 <input type='text' name='TC'>
<p  style='font-family:Commons; text-align:center ;color : white'>T-shirtEvil                <input type='text' name='TD'> </br></br>

<input type='submit' value='ajouter'>
<input type='reset' Value='Réinitialiser'>
</form>";
?>



