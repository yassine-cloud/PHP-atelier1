<?php


$a = 5 ; 
if(is_integer($a) && ($a<10 && $a>5) && ($a%2==0))
echo "Vrai";
else echo "faux"; 

echo "<br><br><br> ";

$b="TRUE";
$c=FALSE;

echo($b AND $c)?1:0;

echo "<br> ";

echo ($b OR $c)?1:0;

echo "<br><br><br> ";


$nom=""; ;
$sexe="M";

echo($nom=="")?"inconnu":$nom; 

echo "<br> ";

echo (($sexe=="F")?"Madame":"Monsieur");

echo "<br><br><br> ";

$nom= "Cherif";

echo $nom ?? "inconnu"; // opérateur d’union NULL
echo "bonjour".($prenom ??"inconnu");
echo "bonjour".($prenom ?? $nom ?? "inconnu");
