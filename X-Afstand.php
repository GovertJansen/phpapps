<?php
$waarde = readline("Welke waarde:");
$invoergrootheid = readline("Welke grootheid:");
$invoergewenst = readline("Welke gewenste grootheid:");

$eenheden = array(
    "Kilometer",
    "Hectometer",
    "Decameter",
    "Meter",
    "Decimeter",
    "Centimeter",
    "Milimeter"
);

if ($invoergrootheid == $eenheden[0])
    if ($invoergewenst == $eenheden[1]) {
        echo ($waarde * 10);
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde * 100);
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde * 1000);
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 10000);
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 100000);
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 1000000);
    }


if ($invoergrootheid == $eenheden[1])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 10);
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde * 10);
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde * 100);
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 1000);
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 10000);
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 100000);
    }
