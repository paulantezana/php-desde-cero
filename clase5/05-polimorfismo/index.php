<?php

/**
 * Un objeto puede responder de maneras diferentes
 * a un mismo mensaje.
 *
 * No importa el tipo de animal que sea, mientras
 * sea un animal estaremos seguros de que puede comer
 * y hablar. EL type-hinting es nuestra garantía de que
 * esos métodos estén presentes.
 */

require_once 'Gato.php';
require_once 'Perro.php';
require_once 'Persona.php';

// Instancias de Animal
$gato = new Gato;
$perro = new Perro;

// Cuidador de los animales
$persona = new Persona;

// Ciudar los animales
$persona->cuidar($gato);
$persona->cuidar($perro);
