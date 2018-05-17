<?php

/* 
 *a função lê todo o conteudo do arquivo e retorna um array
 */

$arquivo = "leia.doc";
$array = file($arquivo);

print("<pre>");
foreach($array as $linha){
    print "$linha <br>";
}


