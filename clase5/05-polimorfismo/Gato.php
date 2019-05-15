<?php

require_once 'AnimalInterface.php';

class Gato implements AnimalInterface {

    public function comer($comida)
    {
        return "Comiendo {$comida}.";
    }

    public function hablar()
    {
        return "Miau";
    }
}
