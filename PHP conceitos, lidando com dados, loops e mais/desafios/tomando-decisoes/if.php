<?php

$idade = 12;

if ($idade >= 18) {
    echo "Você já é maior de idade!";
} else {
    $falta = 18 - $idade;
    echo "Ainda faltam $falta anos para você ser maior de idade\n";
}

// precedência: && || and or

$ternario = $idade > 18 ? "maior" : "menor";

echo $ternario;