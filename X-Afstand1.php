<?php
$eenheden = array(
    "Kilometer",
    "Hectometer",
    "Decameter",
    "Meter",
    "Decimeter",
    "Centimeter",
    "Milimeter"
);
$waarde = readline("waarde: ");
$invoerGrootheid = readline("Welke grootheid: ");
$invoerGewenst = readline("Welke gewenste grootheid: ");

$invoerGrootheid = array_search($invoerGrootheid, $eenheden);
$invoerGewenst = array_search($invoerGewenst, $eenheden);

if ($invoerGrootheid > $invoerGewenst) {
    $hoeVaak = $invoerGrootheid - $invoerGewenst;
    $delenDoor = 1;
    $delenDoor = pow(10, $hoeVaak);
    $uitkomst = $waarde / $delenDoor;
    echo rtrim(number_format(($uitkomst), 7), "0") . $eenheden[$invoerGewenst];
}
if ($invoerGrootheid < $invoerGewenst) {
    $hoeVaak = $invoerGewenst - $invoerGrootheid;
    $delenDoor = 1;
    $delenDoor = pow(10, $hoeVaak);
    $uitkomst = $waarde * $delenDoor;
    echo $uitkomst . $eenheden[$invoerGewenst];
}
