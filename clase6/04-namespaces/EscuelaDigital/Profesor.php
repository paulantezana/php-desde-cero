<?php

namespace EscuelaDigital;

class Profesor {

    private $nombre;
    private $curso;

    public function __construct($nombre, $curso)
    {
        $this->nombre = $nombre;
        $this->curso = $curso;
    }

    public function saludar()
    {
        return "Bienvenido al curso {$this->curso}, mi nombre es {$this->nombre}";
    }
}
