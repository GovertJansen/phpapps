<?php
// $Worst = 6 stuks
// $Hamburgers = 20 stuks
// $Frikandellen = 25 stuks

$Budget = 100;

$Vleeswaren = array(
    "Worst" => "5",
    "Hamburgers" => "10",
    "Frikandellen" => "15",
);
foreach ($Vleeswaren as $Soort => $Prijs) {
    echo "$Soort = $Prijs\n";
}
