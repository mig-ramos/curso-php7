<?php

session_id('ofkncku49jq860tn0et5utgnkl');
// Caso queira recuperar uma session de outro navegador

require_once("config.php");

session_regenerate_id();
// Mesmo que o usuario venha com um ID, é gerado um novo
// melhora a segurança

echo session_id();

var_dump($_SESSION);

?>