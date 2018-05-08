<?php

/* 
 * lê um arquivo que foi identificado pelo ponteiro e retorna string....
 */

$arquivo = "dados.doc";
$ponteiro = fopen($arquivo, "r");

$string = fgets($ponteiro);
print $string;

/*função que converte uma string em array*/

$array = explode(" ", $string);
print "<pre>";
print_r($array);