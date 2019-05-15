<?php

require_once 'Hijo.php';

$daniel = new Hijo('Daniel');
//$daniel->apellido = 'Gelvez';

$daniel->setNombre('Guillermo');
$daniel->setApellido('Gelvez');

if ($daniel->getApellido() == 'Gelvez') {
    echo 'Sí, lo es.' . PHP_EOL;
}

echo $daniel->getApellido() . PHP_EOL;

echo $daniel->getNombre() . PHP_EOL;
//echo $daniel->apellido . PHP_EOL;


//echo 'Heredé el apellido de papa: ' . $daniel->apellido . PHP_EOL;

//echo $daniel->getSecreto() . PHP_EOL;

//echo $daniel->saludar() . PHP_EOL;

//echo $daniel->protegido . PHP_EOL;
