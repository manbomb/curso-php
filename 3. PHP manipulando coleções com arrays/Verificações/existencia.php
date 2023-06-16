<?php

$array = [
    'a' => 1,
    'b' => 2,
    'c' => null
];

var_dump(array_key_exists('a', $array));

var_dump(isset($array['a']));

var_dump(isset($array['c']));

var_dump(in_array(1, $array));

var_dump(array_search(1, $array));