<?php

/* 
 * função que verifica se o ponteiro chegou ou está no final do arquivo....
 */

$arquivo = "pessoa.doc";
$ponteiro = fopen($arquivo, "r");

while (!feof($ponteiro)) {
    $leitura = fgetc($ponteiro);
    print "$leitura <br>";
}