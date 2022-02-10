<?php

setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");
// LC_ALL - mude toda a localização para portugues. São as tres opcoes para linux e windows

echo ucwords(strftime("%A %B"));
// ucwords -  a primeira palavra em maiscula.
// os parametros para esta funcao sao diferentes ("%A %B")
?>