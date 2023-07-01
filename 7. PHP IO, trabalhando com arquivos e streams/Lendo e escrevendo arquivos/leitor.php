<?php

$arquivo = fopen('lista-cursos.txt', 'r');

// Linha a linha
while (!feof($arquivo)) {
    $linha = fgets($arquivo);
    // echo $linha;
}

// Tudo ao mesmo tempo
$arquivo = fopen('lista-cursos.txt', 'r');
$tamanhoArquivo = filesize('lista-cursos.txt');
// tamanho limite: 128 mb
$cursos = fread($arquivo, $tamanhoArquivo);
// echo $cursos;

// Tudo ao mesmo tempo mais simples
$cursos = file_get_contents('lista-cursos.txt');
// echo $cursos;

$cursos = file('lista-cursos.txt');
var_dump($cursos);

fclose($arquivo);