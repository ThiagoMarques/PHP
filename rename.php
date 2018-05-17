<?php

/* 
 * função que renomeia arquivos ou diretórios
 */

$novo = "new.jpg";
$velho = "old.jpg";

if(rename($velho, $novo)) {
    print "Arquivo renomeado com sucesso";
} else {
    print "Erro ao renomear";
}

