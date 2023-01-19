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
    "Millimeter"
);

if ($invoergrootheid == $eenheden[0])
    if ($invoergewenst == $eenheden[1]) {
        echo ($waarde * 10) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde * 100) . " Decameter";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde * 1000) . " Meter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 10000) . " Decimeter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 100000) . " Centimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 1000000) . " Millimeter";
    }


if ($invoergrootheid == $eenheden[1])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 10) . " Kilometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde * 10) . " Decameter";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde * 100) . " Meter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 1000) . " Decimeter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 10000) . " Centimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 100000) . " Millimeter";
    }


if ($invoergrootheid == $eenheden[2])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 100) . " Kilometer";
    } elseif ($invoergewenst == $eenheden[1]) {
        echo ($waarde / 10) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde * 10) . "Meter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 100) . "Decimeter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 1000) . "Centimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 10000) . " Millimeter";
    }

if ($invoergrootheid == $eenheden[3])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 1000) . " Kilometer";
    } elseif ($invoergewenst == $eenheden[1]) {
        echo ($waarde / 100) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde / 10) . " Decameter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde * 10) . " Decimeter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 100) . " Centimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 1000) . " Millimeter";
    }

if ($invoergrootheid == $eenheden[4])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 10000) . " Kilometer";
    } elseif ($invoergewenst == $eenheden[1]) {
        echo ($waarde / 1000) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde / 100) . " Decameter";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde / 10) . " Meter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde * 10) . " Centimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 100) . " Millimeter";
    }

if ($invoergrootheid == $eenheden[5])
    if ($invoergewenst == $eenheden[0]) {
        echo ($waarde / 100000) . " Kilometer";
    } elseif ($invoergewenst == $eenheden[1]) {
        echo ($waarde / 10000) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde / 1000) . " Decameter";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde / 100) . " Meter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde / 10) . " Decimeter";
    } elseif ($invoergewenst == $eenheden[6]) {
        echo ($waarde * 10) . " Millimeter";
    }

if ($invoergrootheid == $eenheden[6])
    if ($invoergewenst == $eenheden[0]) {
        $MMtoKM = ($waarde / 1000000);
        echo $MMtoKM;
    } elseif ($invoergewenst == $eenheden[1]) {
        echo ($waarde / 100000) . " Hectometer";
    } elseif ($invoergewenst == $eenheden[2]) {
        echo ($waarde / 10000) . " Decameter";
    } elseif ($invoergewenst == $eenheden[3]) {
        echo ($waarde / 1000) . " Meter";
    } elseif ($invoergewenst == $eenheden[4]) {
        echo ($waarde / 100) . " Decimeter";
    } elseif ($invoergewenst == $eenheden[5]) {
        echo ($waarde / 10) . " Centimeter";
    }
