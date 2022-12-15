<?php
$teller = "0";
$stop = "stop";
$random = rand(1,100);
$invoer = readline ("Geef een getal");

while ($random != $invoer) {
    echo "Dit antwoord is niet juist, probeer het opnieuw.\n";
if ($random == $invoer) 
echo "Dit is juist!";
if ($random < $invoer)
echo "Het getal is lager";
if ($random > $invoer)
echo "Het getal is hoger";

 exit;
$teller++;
}

?>
