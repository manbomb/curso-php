<?php

$notasBimestre1 = [
    'Vinicius' => 10,
    'Joao' => 1,
    'Ana' => 8
];

$notasBimestre2 = [
    'Vinicius' => 9,
    'Joao' => 2
];

// retorna um novo array contendo os elementos que não estejam no segundo, porém, só leva em consideração os valores
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// retorna um novo array contendo os elementos que não estejam no segundo, porém, só leva em consideração as chaves
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// retorna um novo array contendo os elementos que não estejam no segundo, porém, só leva em consideração as chaves e os valores
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));