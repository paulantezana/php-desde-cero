<?php

/* Conectar */
$mysqli = mysqli_connect('127.0.0.1', 'root', 'secret', 'tienda');

/* Verificar la conexión */
if (mysqli_connect_errno($mysqli)) {
    echo 'Falló al conectar a MySQL: ' . mysqli_connect_error();
}

/* Ejecutar la sentencia SQL */
$resultado = mysqli_query($mysqli, "SELECT nombre, precio FROM productos");

/* Imprimir filas */
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['nombre'] . ' cuesta ' . $fila['precio'] . PHP_EOL;
}

/* Liberar la memoria de resultados */
mysqli_free_result($resultado);

/* Cerrar la conexión */
mysqli_close($mysqli);
