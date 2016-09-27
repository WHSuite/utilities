<?php
namespace Whsuite\Utilities;

class Utilities
{
    /**
     * debug variable nicely
     *
     * @param mixed $var variable to debug
     * @param bool  $die die after displaying?
     */
    public static function debug($var, $die = false)
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';

        if ($die) {

            die();
        }
    }

    /**
     * print_r a variable
     *
     * @param mixed $var variable to debug
     * @param bool  $die die after displaying?
     */
    public static function pr($var, $die = false)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';

        if ($die) {

            die();
        }
    }

}
