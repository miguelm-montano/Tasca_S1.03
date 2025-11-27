<?php 
/*Exercici 1 Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.*/

echo "Exercise 1 \n";

$numbers = [2, 4, 6, 8, 10];

foreach($numbers as $number) {
    echo $number . "\n";
}

echo "\n";

/*Exercici 2
Fes un programa que tingui un array indexat de 6 elements i després:

Mostri per pantalla la mida de l’array anterior.
Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array estiguin normalitzats(s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).
Mostri per última vegada la mida de l’array i el seu contingut. */

echo "Exercise 2 \n";

$colors = ['Black', 'Red', 'Blue', 'Green', 'Orange', 'White'];

foreach($colors as $color) {
    echo $color . " " . "\n";
}

echo count($colors) . " colors. \nThen we delete a color \n";

unset($colors[4]);
$colors = array_values($colors);

foreach($colors as $color) {
    echo $color . " " . "\n";
}

echo count($colors) . " colors. \n";

?>