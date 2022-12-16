<?php
$random = rand(1,100);
$invoer = readline ("Raad het getal 1 t/m 100.");
$teller = 0;

while ($random != $invoer) {
    echo "Niet juist, probeer nog eens\n";
    if ($invoer < 1 or $invoer > 100) {
        exit ("Verkeerde invoer");
    }
    if ($invoer == "stop") {
        exit ("Gestopt door gebruiker.");
    }
    if ($random < $invoer){ 
        echo "Het getal is lager\n";
    }
    if ($random > $invoer){ 
        echo "Het getal is hoger\n";
    }
    $invoer = readline ("Raad het getal");
    $teller ++;
}
 
echo ("Dit is juist. Je hebt het in $teller keer geraden.");


?>