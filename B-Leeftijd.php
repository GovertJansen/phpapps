<?php
$invoer = readline ("Vul je leeftijd in:");

if ($invoer < 9) {
exit ("Je bent te jong"); 
}
if ($invoer > 118) {
    exit ("Je bent te oud");
}
if ($invoer == 10  || $invoer == 16 || $invoer == 18 || $invoer == 50 || $invoer == 67 || $invoer == 100) {
    echo ("Gefeliciteerd!");
} 
if ($invoer ==  62) {
    echo ("Waarschuwing!");
}
?>