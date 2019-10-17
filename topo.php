<?php

echo "Welkom bij m'n topo quizz." . PHP_EOL;
$steden = array("Japan"=>"tokio",
           "Mexico"=>"mexico city",
           "Amerika"=>"new york city",
           "India"=>"mumbai",
           "Korea"=>"seoul",
           "China"=>"shanghai",
           "Nireria"=>"lagos",
           "Argentinia"=>"buenos aires",
           "Egypte"=>"cairo",
           "Engeland"=>"london");

$tellen = 0;
foreach ($steden as $landen => $antwoorden){
$input = readline("Wat is de hoofdstad van " . $landen . "??" . PHP_EOL) ;
if ($input === $antwoorden) {
    echo "Goed bezig!!" . PHP_EOL;
    $tellen++;
} elseif ($input !== $antwoorden) {
    echo "Helaas, '$input' is onjuist, het juiste antwoord is " . $antwoorden . PHP_EOL; 
}
}
echo "Je hebt er" . $tellen . "van de" . count($steden) . "goed geranden.";