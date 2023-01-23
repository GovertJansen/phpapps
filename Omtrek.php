<?php
$diameter = readline ("Vul de diameter van de cirkel in:");

$omtrek = $diameter * pi();
$omtrek = round($omtrek, 2);
echo ("De omtrek van de cirkel is : $omtrek");
