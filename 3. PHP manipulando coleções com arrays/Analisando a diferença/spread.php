<?php

$a = [0, 1, 2];
$b = [4, 5, 6];

$c = [...$a, ...$b];

var_dump($c);

function funcao(int ...$arrayDeInts) {
    var_dump($arrayDeInts);
}

funcao(1, 2, 3);