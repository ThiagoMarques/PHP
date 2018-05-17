<?php

/* 
 * Utilizando o método filter_input(INPUT_COOKIE) 
 */

$c_login = filter_input(INPUT_COOKIE, 'c_login');
$c_senha = filter_input(INPUT_COOKIE, 'c_senha');

/* Verificar se o formulário foi preenchido (cookies) */
if(empty($c_login) || empty($c_senha)) {
    print "<script>alert('Erro!');location='index.php'</script>";
} else {
    print ucwords($c_login) . '<br>' ." Autenticado com Sucesso";
}

if(filter_input(INPUT_GET, 'sair') == ('ok')) {
    setcookie('c_login', NULL);
    setcookie('c_senha', NULL);
    /* redireciona para uma URL específica, HEADER */
    header("Location:index.php");
}

?>



<hr>
<a href="?sair=ok" 
   onclick="return confirm('Deseja sair do sistema?')">
    Sair do Sistema</a>

