<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

    // Tags permitidas
    //echo strip_tags($_POST['busca'], "<strong><a>");

    // Para nao remover as tags mas, escreva as tags na tela
    echo htmlentities($_POST['busca']);
}

?>