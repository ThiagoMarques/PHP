<?php

/* 
 * função que move um arquivo para um diretório específico
 */
$arquivo = $_FILES["arquivo"]["name"];

$dir = "doc/";

if(move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir.$arquivo)) {
    print "O arquivo foi movido com sucesso...";
} else {
    print "Erro ao mover o arquivo...";
}