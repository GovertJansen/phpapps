<?php
$random = rand(1,100);
$invoer = readline ("Raad het getal");
$teller = 0;

while ($random != $invoer) { echo "Niet juist, probeer nog eens\n";
    if ($invoer < 1 or $invoer > 100 or $invoer = "stop") {exit ("Gestopt");}
    if ($random < $invoer) echo "Het getal is lager\n";
    if ($random > $invoer) echo "Het getal is hoger\n";
$invoer = readline ("Raad het getal");
$teller ++;
}

echo ("Dit is juist. Je hebt het in $teller keer geraden.");


?>