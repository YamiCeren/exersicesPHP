<?php
// Genera los primeros n números de la serie Fibonacci
function generarFibonacci($n) {
    $fibonacci = [];

    for ($i = 0; $i < $n; $i++) {
        if ($i === 0) {
            $fibonacci[] = 0;
        } elseif ($i === 1) {
            $fibonacci[] = 1;
        } else {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }

    return $fibonacci;
}

// Ejemplo
print_r(generarFibonacci(10));
?>
