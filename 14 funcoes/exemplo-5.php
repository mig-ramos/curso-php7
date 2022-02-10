<?php

$a = 10;

function trocaValor(&$b){
    // & passagem de parametro por referencia

    $b += 50;

    return $b;
    
};

echo trocaValor($a); // 60
echo "<br>";
echo trocaValor($a);  // 110
echo "<br>";
echo $a;             // 110

?>