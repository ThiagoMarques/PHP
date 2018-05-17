<?php
/*
 * Arquivo de conexão
 */
include_once 'conecta_php.php';

/*
 * Seleciona o banco
 */
mysqli_select_db($link, "sys_mysql");

/*
* DDL 
*/
$query = "CREATE TABLE usuario(
        ID_Usuario int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        Email varchar(180) NOT NULL,
        Login varchar(50) NOT NULL,
        Senha varchar(16) NOT NULL,
        Nivel_Acesso varchar(15) NOT NULL
    );"; 

if(mysqli_query($link, $query)) {
    print "Tabela foi criada <br>";
} else {
    print "Tabela não criada <br>";
}
        

