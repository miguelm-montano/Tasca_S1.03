<?php
/*Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().*/

$names = ['Carlos', 'Maria', 'Pol', 'Miguel', 'Antia', 'Almudena'];

function countArray($names) {
    $lengthWord = array_filter($names, function ($word) {
        return strlen($word) % 2 === 0;
    });

    return $lengthWord; 
}

$test1 = countArray($names);
echo implode(', ', $test1);

?>