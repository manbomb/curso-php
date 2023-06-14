<?php

for ($i = 1; $i <= 100; $i++) {
    $resto = $i % 2;
    if ($resto == 1) {
        echo "$i IMPAR\n";
    }
}