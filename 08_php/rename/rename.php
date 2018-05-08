<?php

/* 
 * função que renomeia arquivos ou diretórios
 */

$novo = "rapariga.jpg";
$velho = "mulher.jpg";

if(rename($velho, $novo)) {
    print "Arquivo renomeado com sucesso";
} else {
    print "Erro ao renomear";
}

