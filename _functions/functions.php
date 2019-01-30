<?php

/**
 * Permet de sécuriser une chaine de caracteres
 * @param $string
 * @return string
 */
function str_secure($string)
{
    return trim(htmlspecialchars($string));
}

/**
 * permet de faire du debug lisible
 * @param $var
 */
function debug($var) {
    echo'<pre>';
    var_dump($var);
    echo'</pre>';

}