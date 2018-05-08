<?php

/* 
 * lê um arquivo e retorna uma string
 */

$arquivo = "leia.doc";
$string = file_get_contents($arquivo);
print $string;
