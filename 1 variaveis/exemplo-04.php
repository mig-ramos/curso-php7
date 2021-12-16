<?php
// Variáveis predefinidas ou arrays super globais


// view-source:http://127.0.0.1/curso-php7/1%20variaveis/exemplo-04.php?a=123

$nome = (int)$_GET["a"];

//var_dump($nome);

// IP do cliente
//$ip = $_SERVER["REMOTE_ADDR"];

// Gerar log dos usuarios
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>