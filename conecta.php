<?php

/* 
 * TParâmetros de COnfiguração do Servidor
 */

define("HOST","127.0.0.1");
define("USER", "root");
define("PASS", "");
define("PORT", "3306");

/*
 * Tente estabelecer conexão com servidor, selecionar o banco de dados
 */

try {
    $conn = mysqli_connect(HOST, USER, PASS, FALSE, PORT, FALSE);
    print "Conectado com Sucesso<br>";
} catch (Exception $ex) {
    
}

/*try {
    $conn = mysqli_connect(HOST, USER, PASS, FALSE, PORT, FALSE);
    if(mysqli_select_db($conn, DBNAME)) {
        print "Banco Selecionado";
 *  else {
 *      print"Banco não Selecionado";
 * }
} catch (Exception $ex) {
    print "Erro: " . mysqli_error($conn);
    
}
 */


