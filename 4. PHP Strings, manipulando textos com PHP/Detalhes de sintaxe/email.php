<?php

function gerarEmail()
{
    $assinatura = "Sérgio Lucas";
    $contudoDoEmail = <<<FINAL
    'Olá meu Amor, 
    
        Eu amo viver a vida com você,
    estou com saudades.
    
    Te amo.';
    $assinatura
    FINAL;

    echo $contudoDoEmail;
}

gerarEmail();
