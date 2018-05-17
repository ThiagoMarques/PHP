<?php

/* 
 * Inclui Arquivo de Conexão
 */

include_once '../conecta.php';

/*
 * Retorna um valor booleano, executa a instrução SQL mysqli_query()
 */

if(mysqli_query($conn, "CREATE DATABASE curso_php")) {
    print "Banco de Dados foi criado";
}
else {
    print "Erro ao criar Banco de Dados";
}