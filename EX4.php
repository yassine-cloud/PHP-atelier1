<?php
$Nom="CHERIF";
$Prenom="Nidhal";

echo "<table border='1'>
<tr>
    <th>Nom</th>
    <th>Prenom</th>    
</tr>
<tr>
    <td>$Nom</td>
    <td>$Prenom</td>
</tr>
</table>";


$info = $Nom.$Prenom;
echo "<script>alert('$info')</script>";