<?php
$lotnummers = array ();
for ($i=1 ; $i <= 6 ; $i++) {
    $getal = readline ("Geef je lot nummers:\n");
    if ($getal <1 || $getal >42) {
    exit ("verkeerd lot nummer ingevoerd.\n");
    }else {
        $lotnummers [] = "$getal";  
    }
}

$trekking = array ();
for ($i=1 ; $i <= 6 ; $i++) {
    $random = rand (1,42);
    $trekking [] = "$random";
}    

