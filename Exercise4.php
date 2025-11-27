<?php
/*Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar favorit */

$person = [
    "name" => "Miguel",
    "age" => 34,
    "email" => "miiguel2m@gmail.com",
    "favFood" => "Burger"

];

foreach($person as $key => $value) {
    echo "$key : $value\n";

}

$person["city"] = "Barcelona";

echo "\n" . $person["city"];
?>