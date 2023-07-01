<?php

//modos: Append, Write
$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\nNovo curso";

fwrite($arquivo, $curso);
file_put_contents('cursos-php.txt', $curso, FILE_APPEND | FILE_TEXT);

fclose($arquivo);