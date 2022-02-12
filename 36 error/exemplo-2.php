<?php

// Sobrescrever o php.ini - o til nega a apresentacao das E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);

error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;
