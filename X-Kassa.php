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
echo "U moet €" .  (number_format($aantal, 2)) . " betalen.\n";
$betaalbedrag = readline("Met welk bedrag betaald u?");

while ($aantal > 0) {
    if (!is_numeric($betaalbedrag)) {
        echo ("Dit is geen geldig getal\n");
        $betaalbedrag = readline("U moet nog €" . (number_format($aantal, 2)) . " betalen.\n Met welk bedrag betaald U? ");
    } else {
        $aantal = $aantal - $betaalbedrag;
        if ($aantal > 0) $betaalbedrag = readline("U moet nog €" . (number_format($aantal, 2)) . " betalen.\n Met welk bedrag betaald U? ");
    }
}

if ($geldTerug = abs($aantal)) {
    echo "U heeft betaald.\nU krijgt €" . (number_format($geldTerug, 2)) . " terug.\n";
} else {
    echo "U heeft betaald.";
}
