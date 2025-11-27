<?php
/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

function hasTheCharacter($words, $character) {

    foreach($words as $word) {
        if(strpos($word, $character) === false) {
            return false;
        }
    }

    return true;
}

$tecnologies = ['PHP', 'Java', 'Laravel', 'Phyton'];
$char = "z";

var_dump(hasTheCharacter($tecnologies, $char));

$colors = ['black', 'blue', 'brown'];
$char2 = "b";

var_dump(hasTheCharacter($colors, $char2));



?>