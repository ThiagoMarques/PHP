<?php

/* 
 * fclose - função que fecha o arquivo utilizando o seu ponteiro
 */

$arquivo = "teste.doc";
$ponteiro = fopen($arquivo, "w");

fclose($ponteiro);

