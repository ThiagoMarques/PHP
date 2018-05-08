<?php

/* 
 *verifica se a localização apontada no ponteiro ou diretório existe
 */

$arquivo = "php/exemplo/doc/arquivo.doc";

if(file_exists($arquivo)){
    print "o caminho apontado é um arquivo <br";
} else {
    print "o arquivo não existe";
}

