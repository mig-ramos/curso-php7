<?php

// Escopo das variáveis

$nome = "Miguel";

function teste(){

    global $nome;
    echo $nome;
}


function teste2(){

$nome = "Arcanjo";
echo $nome." agora no teste 2";
}

teste();

teste2();


?>