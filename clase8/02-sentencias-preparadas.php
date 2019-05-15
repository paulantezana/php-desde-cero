<?php

/* Conectar */
$mysqli = new mysqli('127.0.0.1', 'root', 'secret', 'tienda');

/* Verificar la conexión */
if ($mysqli->connect_errno) {
    echo 'Falló al conectar a MySQL: ' . $mysqli->connect_error . PHP_EOL;
}

// Preparación
$sql = "INSERT INTO productos (nombre, talla, precio) VALUES (?, ?, ?)";
$sentencia = $mysqli->prepare($sql);

if (!$sentencia) {
    echo "Falló la preparación: ({$mysqli->errno}) {$mysqli->error}.\n";
}

// Vincular parámetros
// i entero
// s string
// d double
// b blob
$nombre = 'Camiseta CSS';
$talla = 'S';
$precio = 2000;
if (!$sentencia->bind_param('ssi', $nombre, $talla, $precio)) {
    echo "Falló la vinculación: ({$mysqli->errno}) {$mysqli->error}.\n";
}

// Ejecutar
if (!$sentencia->execute()) {
    echo "Falló la ejecución: ({$mysqli->errno}) {$mysqli->error}.\n";
} else {
    echo "{$sentencia->affected_rows} Fila insertada.\n";
}



// Preparar
$sql = 'SELECT nombre, precio FROM productos';
$sentencia2 = $mysqli->prepare($sql);

// Vincular: no es necesario

// Ejecutar
$sentencia2->execute();

// Vincular las variables de resultados
$sentencia2->bind_result($nombre, $precio);

// Usar datos
while ($fila = $sentencia2->fetch()) {
    echo "{$nombre} cuesta {$precio}.\n";
}

// Cerrar la sentencia
$sentencia->close();

// Cerrar la conexión
$mysqli->close();
