<?php
session_start();
include_once 'conexao.php';

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    echo "$usuario - $senha";
    if((!empty($usuario)) AND (!empty($senha))) {
        //Gerar a senha criptografada
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD
        $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        //atribui a variável a busca, se for um usuário válido
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if($resultado_usuario) {
            //lê a linha no BD
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            //se a senha for igual a senha no BD
            if(password_verify($senha, $row_usuario['senha'])) {
                //Atribui todo valor que ele trouxer a variáveis globais
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                header("Location: administrativo.php");
            }else {
                $_SESSION['msg'] = "Login ou senha incorreto!";
                header("location: login.php");
            }
        }
        
    } else {
    $_SESSION['msg'] = "Login ou senha incorreto!";
    header("location: login.php");
}
} else {
    $_SESSION['msg'] = "Página não encontrada";
    header("location: login.php");
}

