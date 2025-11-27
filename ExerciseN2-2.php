<?php
/*Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.*/

$students = [
    'Jhon Doe' => [10, 8, 9, 6, 8],
    'Maria' => [9, 10, 9, 10, 9],
    'Carlos' => [5, 6, 9, 7, 10],
    'Alba' => [10, 10, 8, 10, 9],
];

function calculateAverage(array $califications) {
    $count = count($califications);
    if($count === 0) {
        return null;
    }

    $sum = array_sum($califications);
    $media = $sum / $count;
    return $media;   
}


//To show all the students
foreach ($students as $studentName => $califications) {
    $average = calculateAverage($califications);

    if($average === null) {
        echo "{$studentName}: There's no califications./n";
    } else {
        echo "{$studentName}: Media = " . number_format($average, 2) . "\n"; 
    }
}

//To show only one student
$studentName = "Alba";

if (isset($students[$studentName])) {
    $califications = $students[$studentName];
    $avg = calculateAverage($califications);

    echo "Media of {$studentName}: " . number_format($avg, 2) . "\n";
} else {
    echo "The student {$studentName} does not exist. \n";
}


?>