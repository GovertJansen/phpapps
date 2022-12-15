<?php
$random = rand(1,100);
$invoer = readline ("Geef een getal");
$teller = 0;

while ($random != $invoer) {
    echo "Dit antwoord is niet juist, probeer het opnieuw.\n";
if ($random < $invoer) echo "Het getal is lager\n";
if ($random > $invoer) echo "Het getal is hoger\n";
$teller ++;
$invoer = readline ("Geef een getal");

}

echo "Dit is juist! Je hebt er $teller keer over gedaan.";
?>
