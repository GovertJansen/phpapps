<?php
$lotnummers = array ();
for ($i=1 ; $i <= 6 ; $i++) {
    $getal = readline ("Geef je lot nummers:");
    if ($getal <1 || $getal >42) {
    exit ("verkeerd lot nummer ingevoerd.");
    }else {
        $lotnummers [] = "$getal";  
    }
}

$trekking = array ();
for ($i=1 ; $i <= 6 ; $i++) {
    $random = rand (1,42);
    if (!in_array($random, $trekking)){
        $trekking [] = "$random";
    }else {
     $i--;
    }
}    

$matches = 0;
foreach ($trekking as $value){
    if (in_array($value, $lotnummers))
    $matches++;
}

function Tooncijfers ($value, $key){
    echo $value;
    if ($key != 5){
        echo ",";
    }
}

echo "Je gekozen cijfers zijn: ";
array_walk ($lotnummers, "Tooncijfers");
echo "\nDe winnende lot cijfers zijn: ";
array_walk ($trekking, "Tooncijfers");

if ($matches == 3){
    echo ("\nJe hebt 10,- gewonnen!");
}elseif ($matches == 4){
    echo ("\nJe hebt 1000,- gewonnen!");
}elseif ($matches == 5){
    echo ("\nJe hebt 100.000,- gewonnen!");
}elseif ($matches == 6){
    echo ("\nJe hebt 10.000.000,- gewonnen!");
}elseif ($matches <= 3){
    echo ("\nJe hebt niks gewonnen.");
}