<?php

function ola(){

    $argumentos = func_get_args();
    // Mostra os argumentos passados para a funcao

    return $argumentos;
    
};

var_dump(ola("Bom dia!"));

?>