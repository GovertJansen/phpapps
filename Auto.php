<?php
$invoer1=readline ("Geef het aantal liter in de tank voor de rit:");
$invoer2=readline ("Geef het aantal liter in de tank na de rit:");
$invoer3=readline ("Geef de kilometerstand bij aanvang van de rit:");
$invoer4=readline ("Geef de kilomterstand aan het einde van de rit:");

$verbruik = (100 * ($invoer1 - $invoer2) / ($invoer4 - $invoer3));
$verbruik = round($verbruik, 2);

echo "Het gemiddelde verbruik van de auto was: $verbruik liter per 100 kilometer.";