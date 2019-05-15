<?php

require_once 'EscuelaDigital/Estudiante.php';
require_once 'EscuelaDigital/Profesor.php';

//Esto no funciona en PHP
//require_once "EscuelalDigitall/*";

require_once 'Universidad/Estudiante.php';
require_once 'Estudiante.php';

// use EscuelaDigital\Estudiante as Alumno;
// use EscuelaDigital\Profesor;
use EscuelaDigital\{Estudiante as Alumno, Profesor};

$estudiante1 = new Alumno('Rafael');
$estudiante2 = new Universidad\Estudiante('Angel');
$estudiante3 = new \Estudiante('Carlos');

echo $estudiante1->saludar() . PHP_EOL;
echo $estudiante2->saludar() . PHP_EOL;
echo $estudiante3->saludar() . PHP_EOL;


$profesor = new Profesor('Daniel Romero', 'PHP desde cero');
echo $profesor->saludar() . PHP_EOL;
