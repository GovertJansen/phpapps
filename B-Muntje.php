<?php
echo "Kop of Munt. \n";
$input = readline ("Druk op Enter:");
$items = array ("Kop", "Munt");
$answer = $items[array_rand ($items)];

echo $answer;

?>