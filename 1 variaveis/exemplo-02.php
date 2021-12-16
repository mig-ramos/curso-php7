<?php
 $anoNascimento = 1990;

//Comentários
 $nome1 = "Miguel";

 $sobreNome = "Ramos";

 $nomeCompleto = $nome1 . " " . $sobreNome;

 echo $nomeCompleto;

 // Parar execução do código aqui
 exit;

 /*
    Bloco de comentário.

 */

 echo $nome1;
 echo "<br/>";

 // Para limpar a variável
 unset($nome1);

 if(isset($nome1)){
     echo $nome1;
 }


?>