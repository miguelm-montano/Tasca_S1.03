<?php
/*Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().*/

$listNumbers = [2, 3, 4, 5, 10, 11, 15, 17];


function sumPrimes(array $listNumbers): int {

    $isPrime = function (int $n): bool {
    if($n <= 1) {
        return false;
    }

    for($i = 2; $i <= sqrt($n); $i++) { //sqrt - calcula la raíz cuadrada de un número
        if($n % $i === 0) {
            return false; 
        }
    }
    return true;
};
   $sum = array_reduce($listNumbers, function($carry, $num) use ($isPrime) { //Nota array_reduce - reduce un array a un único valor
    //use permite que la closure importe variables del scope exterior (donde se definió la closure) para poder usarlas dentro.
        $n = (int) $num;
        if($isPrime($n)) {
            return $carry + $n;
        }
        return $carry;

    }, 0);
    return $sum;
} 

echo "Sum of primes: " . sumPrimes($listNumbers) . PHP_EOL;

?>