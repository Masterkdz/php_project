<title>Class Generator</title>
<?php
require_once("connect_login.php");
include("entete.php");
include("menu.php");

$atout1;
$atout2;
$atout3;
$principale;
$secondaire;
$accessoire1;
$accessoire2;




//$a
$atout1=array("C4 x2","Grenades Sp&eacute;ciales x3", "RPG7 x2", "Claymores x2", "Frag x3", "Cartouchi&egrave;re", "Unit&eacute; de D&eacute;minage");
//$b
$atout2=array("Force d'Opposition", "Mastodonte", "Tour de Passe-passe", "Double Coup", "Surarmement", "Brouilleur de Drone", "Onde de choc");
//$c
$atout3=array("Conditions Extremes", "Vis&eacute;e Solide", "Baroud d'Honneur", "Martyre", "Impact Lourd", "Poumons d'Acier", "Silence de Mort", "Ecoute aux Portes");
//$d
$principale=array("MP5", "Skorpion", "Mini-Uzi", "AK-74u", "P90", "M249 SAW", "RPD", "M60E4", "M16A4", "AK-47", "Carabine M4", "G3", "G36C", "M14", "MP44", "W1200", "Benelli M4", "M40A3", "M21", "Dragunov", "R700", "Barret 50");
//$e
$secondaire=array("M9", "USP 45", "Colt 1911", "Desert Eagle", "Desert Eagle dor&eacute;");
//$f
$accessoire1=array("Lance-Grenade", "Viseur Laser", "Silencieux","Poign&eacute;e", "Viseur ACOG", "Sans accessoires");
//$g
$accessoire2=array("Sans Accessoires", "Silencieux");
//$h
$grenade=array("Grenade Flash", "Grenade Fumigene", "Grenade Paralysante");


$a=mt_rand(0,6);
$b=mt_rand(0,6);
$c=mt_rand(0,7);
$d=mt_rand(0,21);
$e=mt_rand(0,4);
$f=mt_rand(0,5);
$g=mt_rand(0,1); 
$h=mt_rand(0,2);
$i=mt_rand(0,21);
$j=mt_rand(0,5);

//exceptions premiere arme
while (
		($f<4 && $d>16)
		|| (($f!=3 || $f!=5) && ($d>4 && $d<8))
 		|| ($f!=3 && ($d>4 && $d<8)) 
 		|| (($f==0 OR $f==3)&& $d<4)
 		|| ($f!=5 && $d==14) 
		
 		) {
	$f=mt_rand(0,5);
	
}
//Exceptions deuxieme arme (si surarmement)
while (
		($j<4 && $d>16)
		|| (($j!=3 || $j!=5) && ($d>4 && $d<8))
 		|| ($j!=3 && ($d>4 && $d<8)) 
 		|| (($j==0 OR $j==3)&& $d<4)
 		|| ($j!=5 && $d==14) 
		
 		) {
	$j=mt_rand(0,5);
	
}

//pas de smokex3
while ($h==1 && $a==1){
	$a=mt_rand(0,6);

}

//Accessoire deagle
if ($g!=0 && $e>3){
	$g=0;
}

//Pas 2 fois la meme arme si surarmement
while ($b==4 && $d==$i){
	$i=mt_rand(0,21);
}

//Si surarmement
if ($b==4){
	echo "Arme Principale : ".$principale[$d]."<br>";
	echo "Accessoire : ".$accessoire1[$f]."<br><br>";
	
	$f=mt_rand(0,5);
	
	echo "Arme Secondaire : ".$principale[$i]."<br>";
	echo "Accessoire : ".$accessoire1[$f]."<br><br>";
}
else {
	echo "Arme Principale : ".$principale[$d]."<br>";
	echo "Accessoire : ".$accessoire1[$f]."<br><br>";
	echo "Arme Secondaire : ".$secondaire[$e]."<br>";
	echo "Accessoire : ".$accessoire2[$g]."<br><br>";
}

//Si poignée ou LG
if ($f==0 || $f==3){
	echo "Atout 1 : Pas d'atout 1 <br>";
	echo "Atout 2 : ".$atout2[$b]."<br>";
	echo "Atout 3 : ".$atout3[$c]."<br><br>";
}
else{
	echo "Atout 1 : ".$atout1[$a]."<br>";
	echo "Atout 2 : ".$atout2[$b]."<br>";
	echo "Atout 3 : ".$atout3[$c]."<br><br>";
}
echo "Grenade Sp&eacute;ciale : ".$grenade[$h]."<br><br>";
echo "<p><a href='classgenerator.php'>Reessayer</a></p>";
echo "<br><br><br><br><br>NB: attention, ce programme necessitant beaucoup d'exceptions et etant bas&eacute; sur la fonction random, il peut arriver que le programme mette du temps a charger, ne vous inquietez pas, il suffit d'attendre et relancer la page en cas de bug!";
?>


