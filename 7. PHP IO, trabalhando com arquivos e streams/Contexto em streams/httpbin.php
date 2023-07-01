<?php

$context = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => "X-FROM: php\r\n".
            "content-type: text/plain",
        'content' => 'Teste do corpo da req',
    ]
]);

echo file_get_contents('http://httpbin.org/delete', false, $context);