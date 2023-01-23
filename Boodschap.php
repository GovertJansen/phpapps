<?php

$aantal = readline ("Hoeveel producten wil je plaatsen:\n" );

if ($aantal != is_numeric($aantal) ) { 
    exit  ("Geen getal ingevoerd.\n");
}

$lijst = array(); 

for ($i=1 ; $i <= $aantal ; $i++){
    $invoer = readline ("Geef je producten op:$i van $aantal\n");
    $lijst [] = "$invoer";  
}
foreach ($lijst as $value) {
    echo "$value \n";
  }
