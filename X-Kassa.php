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

while ($aantal > 0) {
    if (!is_numeric($betaalmethode)) {
        echo ("Dit is geen geldig getal\n");
        $betaalmethode = readline("Je moet nog $aantal betalen.\n Met welk bedrag betaal je?");
    } else {
        $aantal = $aantal - $betaalmethode;
        if ($aantal > 0) $betaalmethode = readline("Je moet nog $aantal betalen.\n Met welk bedrag betaal je?");
    }
}

if ($betaalmethode > $aantal && ($aantal < 0)) {
    $positive = abs($aantal);
    echo "Je krijgt $positive terug.\n";
}
echo "U heeft betaald.";
