<?php
$invoer = readline("Geef een bedrag:");
$lijst = array();

while ($invoer >=  1 || !is_numeric($invoer)) {
    if (!is_numeric($invoer)) {
        echo ("Dit is geen geldig getal\n");
    } else {
        array_push($lijst, $invoer);
    }
    $invoer = readline("Geef een bedrag:");
}
$aantal = array_sum($lijst);
echo "Je moet $aantal € betalen.\n";

$betaalmethode = readline("Met welk bedrag betaald u?");

while ($betaalmethode < $aantal) {
    $betaalmethode = readline("Met welk bedrag betaald u?");
}
