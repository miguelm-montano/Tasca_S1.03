<?php
/*Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().*/


$integerNumbers = [2, 4, 6, 8 , 10];

//Para elevar al cubo

function calculateCube($n) {
    return $n ** 3;
}

$cubedNumbers = array_map('calculateCube', $integerNumbers);

print_r($cubedNumbers);

//or 

echo implode(", ", $cubedNumbers);


?>