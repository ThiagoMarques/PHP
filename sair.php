<?php

session_start();
//VDefinir a variável global nome - casos vazios
if(!empty($_SESSION['nome'])) {
    echo "Olá ".$_SESSION['nome']."<br>";
    echo "<a href='sair.php'> Sair</a>";
} else {
    $_SESSION['msg'] = "Área Restrita";
    header("location: login.php");
}
//destruir variáveis globais
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "Deslogado com sucesso!";
header("location: login.php");

