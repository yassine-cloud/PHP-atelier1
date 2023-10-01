<?php

echo "<h1>Calcul sur les variables</h1>";
$tva = 0.2;
$prix = 150;
$nombre = 10;

$prix_HT=$prix * $nombre ;
$prix_TTC=$prix_HT * (1+$tva) ;

echo "Prix Hort taxe = $prix_HT <br>Prix Tout Taxe Comprise = $prix_TTC";