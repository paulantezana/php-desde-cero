<?php

try {

    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tienda',
        'root',
        'secret'
    );

    $sql = 'SELECT nombre, precio FROM productos';
    $resultado = $pdo->query($sql);

    foreach ($resultado as $fila) {
        echo "{$fila['nombre']} vale {$fila['precio']}.\n";
    }

} catch (PDOException $e) {
    echo 'Error!: ' . $e->getMessage() . PHP_EOL;

} finally {
    $pdo = null;
}
