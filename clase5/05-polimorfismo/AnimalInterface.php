<?php

/**
 * Las interfaces son muy similares a las clases abstractas
 * excepto que no contienen lógica.
 *
 * Son únicamente un contrato que deben cumplir las clases
 * que hereden de ellas.
 */
interface AnimalInterface {

    public function comer($comida);

    public function hablar();
    
}
