<?php

// Função para escapar a saída
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Adiciona cabeçalhos de segurança

header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");
// header("X-Frame-Options: DENY");
// header("Content-Security-Policy: default-src 'self';");

// Captura a URI da requisição
$requestUri = $_SERVER['REQUEST_URI'];

// Remove a parte da query string, se existir
$requestUri = strtok($requestUri, '?');


// Define a página padrão
$page = 'home';


// Verifica se a URI corresponde a uma página específica

switch ($requestUri) {

    case '/about':

        $page = 'about';
        break;

    case '/contact':

        $page = 'contact';
        break;

    case '/':

        $page = 'home'; // Página inicial
        break;

    default:

        $page = 'home'; // Página padrão em caso de erro

}
?>