<?php

namespace App\Libraries;

class View
{
    public static function render($fileView, array $variables = [])
    {
        /*$array = ['cosa1' => 'Un texto', 'cosa2' => 'otro texto'];
        extract($array);
        $cosa1 = 'Un texto';
        $cosa2 = 'otro texto';*/

        extract($variables);

        require_once APP_PATH . "/views/$fileView.view.php";
    }
}