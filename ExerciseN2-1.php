<?php

/* Exercici 1
Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:

La llista de convidats en comú entre les dues llistes.
La mescla de la llista de convidats(sense repeticions).
La llista de convidats exclusius de la primera llista.
La llista de convidats exclusius de la segona llista. */

$guestsList1 = ['Miguel', 'Maria', 'Joan', 'Pol', 'Antia'];
$guestsList2 = ['Maria', 'Segio', 'Marc', 'Adriana', 'Marta'];

//Common guests
$commonGuests = [];

foreach($guestsList1 as $guests) {
    if(in_array($guests, $guestsList1)) {
        $commonGuests[] = $guests;
    }
}

echo "Common guests:\n";

var_dump($commonGuests);

//Mixed guests without repeated names
echo "\nMixed guests avoiding repeated names\n";

$mixedList = array_merge($guestsList1, $guestsList2);
$noRepeatGuestsList = array_unique($mixedList);
var_dump($noRepeatGuestsList);

//Exclusive guests first list
echo "\nExclusive guests list 1\n";

$exclusiveGuestsList1 = array_diff($guestsList1, $guestsList2);
var_dump($exclusiveGuestsList1);

//Exclusive guests second list
echo "\nExclusive guests list 2\n";

$excluseGuestsList2 = array_diff($guestsList1, $guestsList2);
var_dump($excluseGuestsList2);


?>
