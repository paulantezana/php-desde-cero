<?php

try {

    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=tienda',
        'root',
        'secret'
    );

    $sql = 'TRUNCATE TABLE productos';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();

    // Preparar
    $sql = 'INSERT INTO productos (nombre, talla, precio) VALUES (:nombre, :talla, :precio)';
    $sentencia = $pdo->prepare($sql);

    // Vincular
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':talla', $talla);
    $sentencia->bindParam(':precio', $precio);

    // Ejecutar
    // Inserta una fila
    $nombre = 'Camiseta de HTML';
    $talla = 'S';
    $precio = 1200;
    $sentencia->execute();

    // Insertar otra fila con diferentes datos
    $nombre = 'Camiseta de JS';
    $talla = 'L';
    $precio = 2000;
    $sentencia->execute();



    // Podemos pasar parámetros con nombre y ejecutar
    $sentencia->execute([
        ':nombre' => 'Camiseta PHP',
        ':talla' => 'M',
        ':precio' => 2200
    ]);

    $sentencia->execute([
        ':nombre' => 'Camiseta CSS',
        ':talla' => 'L',
        ':precio' => 1200
    ]);


    // Podemos usar parámetros de sustitución
    $sql = 'SELECT nombre, talla, precio FROM productos WHERE nombre LIKE ? AND precio > ?';
    $sentencia = $pdo->prepare($sql);

    $sentencia->execute(['%S%', 1000]);

    $resultado = $sentencia->fetchAll();

    foreach ($resultado as $fila) {
        echo "{$fila['nombre']} vale {$fila['precio']}.\n";
    }

    // Actualizar registros
    $sql = 'UPDATE productos SET precio = :precio WHERE id = :id';
    $otraSentencia = $pdo->prepare($sql);
    $otraSentencia->execute([
        ':precio' => 1500,
        ':id' => 1
    ]);

    // Eliminar registros
    $sql = 'DELETE FROM productos WHERE id = :id';
    $sentenciaEliminadora = $pdo->prepare($sql);
    $sentenciaEliminadora->execute([
        ':id' => 1
    ]);


} catch (PDOException $e) {
    echo 'Error!: ' . $e->getMessage() . PHP_EOL;

} finally {
    $pdo = null;
}
