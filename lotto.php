<?php
$lotnummers = array ();
for ($i=0 ; $i <= 6 ; $i++) {
    $getal = readline ("Geef je lot nummers:\n");
    if ($getal <1 || $getal >42) {
    exit ("verkeerd lot nummer ingevoerd.\n");
    }else {
        $lotnummers [] = "$getal";  
    }
}
foreach ($lotnummers as $value) {
    echo "$value \n";
}