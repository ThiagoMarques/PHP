<!DOCTYPE html>
<!--
Utilizando o recurso do navegador para persistência de dados
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Utilizando o método COOKIES </h2>
        <form method="POST">
            <span> Digite o Login: </span>
            <input type="text" name="login" required>
            <span> Digite a Senha: </span>
            <input type="password" name="senha" required>
            <input type="submit" value="Logar">
        </form>
        <hr>
        <?php
            $login = filter_input(INPUT_POST, 'login');
            $senha = filter_input(INPUT_POST, 'senha');
            print '<pre>';
            //print $login . '-' . $senha;
            
            /* Armazenando em COOKIES setcookie(NOME, VALOR) */
            setcookie('c_login', $login);
            setcookie('c_senha', $senha);  
        ?>
        <p>
        <a href="verifica.php"> Verificador Cookies </a>
        </p>
    </body>
</html>
