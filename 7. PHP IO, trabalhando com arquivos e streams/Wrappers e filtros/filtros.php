<?php

require 'MeuFiltro.php';

$cursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.teste', MeuFiltro::class);
stream_filter_append($cursos, 'string.toupper');
stream_filter_append($cursos, 'alura.teste');

$conteudo = fread($cursos, filesize('lista-cursos.txt'));
echo $conteudo . PHP_EOL;