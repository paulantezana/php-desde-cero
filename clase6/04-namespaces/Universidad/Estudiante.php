<?php

namespace Universidad;

class Estudiante {

    private $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function saludar()
    {
        return "Saludos, mi nombre es {$this->nombre} y soy del namespace Universidad";
    }
}
