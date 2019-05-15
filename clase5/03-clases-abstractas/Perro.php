<?php

require_once 'Animal.php';

class Perro extends Animal {

    const MI_ARRAY = ['cosa1', 'cosa2', 'cosa3'];

    public function hablar()
    {
        return 'Woof!';
    }
}
