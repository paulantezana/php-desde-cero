<?php

require_once 'Papa.php';

class Hijo extends Papa {

    public static $abuelos;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public static function saludar()
    {
        return 'Hola, yo tengo ' . self::$abuelos . ' abuelos.';
        //echo "Hola.\n";
        //echo $this->cosaPrivada();
        //echo $this->protegido;
    }
}
