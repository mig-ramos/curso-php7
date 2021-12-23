<?php

$pessoa = array(

    'nome'=>'Marcus',

    'idade'=>20
    
);

foreach ($pessoa as &$value) {
    // com 0 & acessa o endereco de memoria de uma variavel
    if (gettype($value) === 'integer') $value += 10;
    // retorna o tipo de dado da variavel
    
    echo $value.'<br>';

}

print_r($pessoa);

?>