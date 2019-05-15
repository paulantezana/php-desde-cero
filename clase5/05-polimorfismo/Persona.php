<?php
/**
 * Quien cuida el animal
 */
class Persona {

    public function cuidar(AnimalInterface $animal)
    {
        echo $animal->hablar() . PHP_EOL;
        echo $animal->comer('carne') . PHP_EOL;
    }
}
