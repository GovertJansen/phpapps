<?php
// $Worst = 6 stuks
// $Hamburgers = 20 stuks
// $Frikandellen = 25 stuks

$Budget = 0;
$Boodschappenlijst = array();
$Vleeswaren = array(
    "Worst" => "5",
    "Hamburgers" => "10",
    "Frikandellen" => "15",
);

while ($Budget != 100) {
    array_push($Boodschappenlijst, $Vleeswaren);
    $Budget++;
}
$Lijst = array_sum($Boodschappenlijst);
echo $Lijst;
