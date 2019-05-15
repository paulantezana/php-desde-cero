<?php

require_once 'Papa.php';

/**
 * Constantes
 *
 * Con valores que no cambian ni pueden ser redefinidos.
 */
define('PI', 3.1416);
echo PI . PHP_EOL;

// Constantes de clases
$papa = new Papa;
echo $papa::GENERO . PHP_EOL;


// Arrays constantes
define('FRUTAS', [
    'manzana', 'pera', 'mango'
]);
echo FRUTAS[2] . PHP_EOL;
