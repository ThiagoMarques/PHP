<?php

/* 
 * Inclui Arquivo de Conexão
 */

include_once '../conecta.php';

/*
 * Seleciona o Banco de Dados
 */
mysqli_select_db($conn, "curso_php");

/*
 * Cria a instrução SQL
 */

$query = "CREATE TABLE aula (
            COD int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
            Descricao varchar(20) NOT NULL
            )";

/*
 * Executa a instrução SQL
 */

if(mysqli_query($conn, $query)) {
    print "Tabela foi criada";
}
else {
    print "Erro ao criar Tabela";
}

if(mysqli_query($conn, "CREATE DATABASE curso_php")) {
    print "Banco de Dados foi criado";
}
else {
    print "Erro ao criar Banco de Dados";
}