<?php

include_once 'conecta_php.php';

/*
 * DDL -Definição de Dados
 * CREATE, ALTER, DROP
 * IF NOT EXISTS !
 */

$query = "CREATE DATABASE sys_mysql";

if(mysqli_query($link, $query)) {
    print "Banco de Dados criado com sucesso<br>";
} else {
    print "erro ao criar banco de dados, banco existente<br>";
}

