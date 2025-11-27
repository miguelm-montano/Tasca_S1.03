<?php
/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

function hasTheCharacter(array $words, string $character): bool {

    foreach($words as $word) {
        if(strpos($word, $character) === false) {
            return false;
        }
    }

    return true;
}

$technologies = ['PHP', 'Java', 'Laravel', 'Phyton'];
$char = "z";

if (hasTheCharacter($technologies, $char)) {
    echo "All words contain '$char'.\n";
} else {
    echo "Not all words contain '$char'.\n";
}
    
$colors = ['black', 'blue', 'brown'];
$char2 = "b";

if (hasTheCharacter($colors, $char2)) {
    echo "All words contain '$char2'.\n";
} else {
    echo "Not all words contain '$char2'.\n";
}


?>