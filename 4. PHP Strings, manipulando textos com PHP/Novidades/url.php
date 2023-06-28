<?php 

$url = "https://google.com.br";
$secureUrl = str_starts_with($url, "https");
if ($secureUrl) {
    echo "URL segura!".PHP_EOL;
}

$brazilianDomain = str_ends_with($url, "br");
if ($brazilianDomain) {
    echo "Dominio brasileiro!".PHP_EOL;
}