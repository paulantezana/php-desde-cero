<?php

require_once 'AnimalInterface.php';

class Perro implements AnimalInterface {

    public function comer($comida)
    {
        return "Comiendo {$comida} y moviendo la cola.";
    }

    public function hablar()
    {
        return "Woff!";
    }
}
