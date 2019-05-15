<?php

/* Conectar */
$mysqli = new mysqli('127.0.0.1', 'root', 'secret', 'tienda');

/* Verificar la conexión */
if ($mysqli->connect_errno) {
    echo 'Falló al conectar a MySQL: ' . $mysqli->connect_error . PHP_EOL;
}

/* Ejecutar la sentencia SQL */
$sql = "SELECT nombre, precio FROM productos";
$resultado = $mysqli->query($sql);

/* Imprimir filas */
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

/* Liberar la memoria de resultados */
$resultado->free();

/* Cerrar la conexión */
$mysqli->close();
