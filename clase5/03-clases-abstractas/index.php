<?php

require_once 'Perro.php';

$perro = new Perro;
echo $perro->saludar() . PHP_EOL;
echo $perro->hablar() . PHP_EOL;
echo $perro::MI_ARRAY[0] . PHP_EOL;
