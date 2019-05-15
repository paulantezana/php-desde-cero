<?php

require_once '01-throwling.php';

try {
    //echo beber('cerveza');
    //echo comer('maní') . PHP_EOL;
    echo comer('pollo') . PHP_EOL;

} catch (ComidaException $e) {
    echo 'Atrapamos excepción de comida: ' . $e->getMessage() . PHP_EOL;

} catch (BebidaException $e) {
    echo 'Atrapamos excepción de bebida: ' . $e->getMessage() . PHP_EOL;

} catch (Exception $e) {
    echo 'Atrapamos una excepción: ' . $e->getMessage() . PHP_EOL;

} finally {
    echo "Esto se ejecuta después del try catch.\n";
}

echo 'Fin.' . PHP_EOL;
