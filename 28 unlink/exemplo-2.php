<?php

if (!is_dir("images")) mkdir("images");

// scandir scaneia um diretório e transforma num array
foreach (scandir("images") as $item) {

    if (!in_array($item, array(".", ".."))) {

        // exclui os arquivos do diretorio images
        unlink("images/" . $item);

    }

}

echo "OK";

?>