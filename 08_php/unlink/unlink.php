<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$arq1 = "arq1.doc";
$arq2 = "arq2.doc";
$arq3 = "arq3.doc";

if(unlink($arq1) && unlink($arq2) && unlink($arq3)){
    print "Arquivos deletados com sucesso";
} else {
    print "Erro ao deletar os arquivos";
}

