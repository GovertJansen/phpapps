<?php 

$teller = 0;
$random = rand(1,100);
$invoer = 101;
echo $random;
while ($invoer != $random){
    $invoer = readline("Geef een getal");
    if($invoer=='stop'){
        exit ("Gestopt");
    }else if ($invoer < 1 or $invoer > 100){
        exit ("Verkeerd getal ingevoerd\n");
    }else if ($invoer < $random){
        echo "Het getal is hoger\n";
    }else if ($invoer > $random){
        echo "Het getal is lager\n";
    }
    $teller++;
}

echo ("Je hebt het geraden in $teller keer");
?>