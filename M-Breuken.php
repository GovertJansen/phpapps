<?php

$Deeltal = readline("Geef een deeltal:");
$Deler = readline("Geef een Deler:");
$Antwoord = ($Deeltal / $Deler);


if (is_int($Antwoord)) {
    echo "Kaas";
}

die;
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));


// Check again... 
$x = 59.85;
var_dump(is_int($x));
