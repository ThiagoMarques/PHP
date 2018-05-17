<?php

//copy --- função que copia um ou mais arquivos de uma origem para um destino
//a função copy retorna um booleano

$destino = "bkp/testebkp.doc";
$origem = "teste.doc";

if(copy($origem, $destino)){
    print "Arquivo copiado.<br>";
} else {
    print "Arquivo não copiado. <br>";
}
