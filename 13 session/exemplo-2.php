<?php

require_once("config.php");

// unset($_SESSION['nome']);

echo $_SESSION['nome'];

unset($_SESSION['nome']);

session_destroy();

?>