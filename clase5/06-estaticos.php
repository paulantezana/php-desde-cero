<?php

/**
 * Dentro de métodos estáticos de una clase no podemos usar $this.
 */

require_once 'Hijo.php';

Hijo::$abuelos = 2;
echo Hijo::$abuelos . PHP_EOL;

$daniel = new Hijo('Daniel');
$diana = new Hijo('Diana');

echo 'Daniel tiene ' . $daniel::$abuelos . ' abuelos' . PHP_EOL;
echo 'Diana tiene ' . $diana::$abuelos . ' abuelos' . PHP_EOL;

echo $daniel::saludar() . PHP_EOL;
