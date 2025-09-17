<?php
// Verifica si una palabra es palíndromo
function esPalindromo($palabra) {
    $normalizada = strtolower(str_replace(' ', '', $palabra));
    return $normalizada === strrev($normalizada);
}

// Filtra un arreglo y devuelve solo los palíndromos
function obtenerPalindromos($arreglo) {
    $resultado = [];

    foreach ($arreglo as $palabra) {
        if (esPalindromo($palabra)) {
            $resultado[] = $palabra;
        }
    }

    return $resultado;
}

// Ejemplo
$palabras = ["oso", "casa", "reconocer", "salas", "hola"];
print_r(obtenerPalindromos($palabras));
?>
