<?php declare(strict_types = 1);

function bienvenida(...$nombres)
{
    // Iteramos los nombres.
    foreach ($nombres as $nombre) {
        echo "Bienvenido, {$nombre}.\n";
    }
}

bienvenida('Ricardo', 'Alan', 'Alvaro', 'Daniel');


function sumaDeEnteros(int ...$enteros)
{
    return array_sum($enteros);
}

echo sumaDeEnteros(1, 2, 3) . PHP_EOL;
