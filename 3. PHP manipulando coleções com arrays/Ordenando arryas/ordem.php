<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo (implode(".", $notas)."\n");
echo (implode(".", $notasOrdenadas));
