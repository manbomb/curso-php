<?php

$regex = '/^[0-9]{4}$/';
$textos = ['abcd', '1234', 'ab12', 'oi'];

foreach ($textos as $texto) {
    $valido = preg_match($regex, $texto);
    echo var_dump($valido).PHP_EOL;
}