<?php

$nome = "Sérgio Avilla";

list($nome, $sobrenome) = explode(" ", $nome);
var_dump([$nome, $sobrenome]);