<?php

$alunos = [
    'Patricia',
    'Nicolas',
    'Sérgio'
];

$novos = [
    'Kauane',
    'Leticia'
];

$alunosComNovos = array_merge($alunos, $novos);
var_dump($alunosComNovos);