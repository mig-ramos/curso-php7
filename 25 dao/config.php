<?php

spl_autoload_register(function($class_name){

    $filenmae = $class_name.".php";

if(file_exists($filenmae)){
    require_once($filenmae);
}

});

?>