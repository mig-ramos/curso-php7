<?php

// FUNCAO ANONIMA
// Usados em processos lentos , nao sabe quando vai terminar

function test($callback){

    //processo lento

    $callback();

}

test(function(){

    echo "Terminou!";

})

?>