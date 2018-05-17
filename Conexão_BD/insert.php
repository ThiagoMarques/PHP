<?php
include_once 'config.php';
include_once 'conecta_php.php';
/*
 * Utilizar o método filter_input(METHOD, NOMECAMPO)
 */

$e = filter_input(INPUT_POST, 'email');
$l = filter_input(INPUT_POST, 'login');
$s = filter_input(INPUT_POST, 'senha');
$n = filter_input(INPUT_POST, 'nivel_acesso');

mysqli_select_db($link, "sys_mysql");

/*
 * DML - Datam Manipulation Language
 * sintaxe INSERT INTO tabela(campo, campo...) VALUES(v1,v2...)
 */

$query = "INSERT INTO usuario (email, login, senha, nivel_acesso) VALUES ('$e', '$l', '$s', '$n')";

/*
 * Verificar se a instrução foi executada
 */

if(mysqli_query($link, $query)) {
    $msg = "<script>alert('Registro Inserido'); location = 'index.php'</script>";
    print $msg;
} else {
    print "Dados não inseridos<br>";
}
        
