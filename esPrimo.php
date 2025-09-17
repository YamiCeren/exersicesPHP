<?php
// Verifica si un número es primo
function esPrimo($num) {
    if ($num < 2) return false;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) return false;
    }

    return true;
}

// Obtiene los primeros n números primos
function obtenerPrimos($n) {
    $primos = [];
    $num = 2;

    while (count($primos) < $n) {
        if (esPrimo($num)) {
            $primos[] = $num;
        }
        $num++;
    }

    return $primos;
}

// Ejemplo
print_r(obtenerPrimos(10));
?>
