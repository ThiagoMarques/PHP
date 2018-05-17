<?php

/*a função fopen abre um arquivo e retorna um ponteiro, informando que o arquivo foi aberto
 * o ponteiro é chamado de resource
 * 
 */

$arquivo = "teste.doc";
$buffer = fopen($arquivo, "r");
print($buffer);
