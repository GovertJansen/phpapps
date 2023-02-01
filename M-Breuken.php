<?php

$Deeltal = readline("Geef een deeltal:");
$Deler = readline("Geef een Deler:");
$Antwoord = ($Deeltal / $Deler);

//Check of het een heel getal is:
if (is_int($Antwoord)) 
{
    echo $Antwoord;
}
else 
{
 echo "Het antwoord met de breuk......"; 
}



