<?php
$programmeertalen = array("PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C");
foreach ($programmeertalen as $value) {
    echo $value;
}




die;
$programmeertalen = array("PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C");
array_push($programmeertalen, "Python", "Swift");
sort($programmeertalen);
print_r($programmeertalen);
