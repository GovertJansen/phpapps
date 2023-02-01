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
    for ($i = 0; $i < $hoeVaak; $i++) {
        $delenDoor = $delenDoor * 10;
    }
    $uitkomst = $waarde / $delenDoor;
    echo rtrim(number_format(($uitkomst), 7), "0");
}
if ($invoerGrootheid < $invoerGewenst) {
    $hoeVaak = $invoerGewenst - $invoerGrootheid;
    $delenDoor = 1;
    for ($i = 0; $i < $hoeVaak; $i++) {
        $delenDoor = $delenDoor * 10;
    }
    $uitkomst = $waarde * $delenDoor;
    echo $uitkomst;
}
