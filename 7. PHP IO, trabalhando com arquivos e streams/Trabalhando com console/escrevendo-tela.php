<?php

$tela = fopen('php://stdout', 'w');
fwrite($tela, "Olá mundo!\n");

$erro = fopen('php://stderr', 'w');
fwrite($erro, 'Olá mundo!');