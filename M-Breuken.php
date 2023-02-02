<?php
$Deeltal = readline("Geef een deeltal:");
$Deler = readline("Geef een Deler:");
$Antwoord = ($Deeltal / $Deler);

//Check of het een heel getal is:
if (is_int($Antwoord)) {
    echo $Antwoord;
} else {
    // getal achter komma * deler =    
    $RestGetal = $Antwoord - floor($Antwoord);
    $Breuk = $RestGetal * $Deler;
    echo "$Deeltal / $Deler = " .  floor($Antwoord) . " $Breuk/$Deler";
}
