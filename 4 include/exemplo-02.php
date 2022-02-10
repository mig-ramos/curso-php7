<?php

// include "inc/exemplo-01.php";
    // o include tenta funcionar mesmo que o arquivo não exista ou que 
    // esteja com algum tipo de problema, além do include ter mais recursos.
    // Ex.: Existe o diretório include path, que o include traga arquivo direto de lá,
    // esse diretório por padrão é configurado no PHP.ini
    // PERIGO: o include permite trazer também um arquivo de um site

require_once "inc/exemplo-01.php"; 
require_once "inc/exemplo-01.php"; 
    // Obriga que o arquivo exista, e que esteja funcionando corretamente. 
    // Se ele não estiver funcionando ou não existir, 
    // o require gera um erro fatal,
    // pára a execução do código.

    // require_once ignora a próxima chamada



$resultado = somar(10, 20);

echo $resultado;


?>