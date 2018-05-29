<?php
session_start();
/*Variável Global*/
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login Sistema</title>
    </head>
    <body>
        <h2>Área Restrita</h2>
        <?php
            if(isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                /*Inicia e destrói a mensagem*/
            }
            
        ?>
        <form method="POST" action="valida.php">
            <label>Usuário: </label>
            <input type="text" name="usuario" placeholder="Digite seu usuário"><br><br>
            <label>Senha: </label>
            <input type="text" name="senha" placeholder="Digite sua senha"><br><br>
            <input type="submit" name="btnLogin" value="Acessar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
