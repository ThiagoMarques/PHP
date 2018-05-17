<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!-- Tela de cadastro de usuários -->
        <h2>Tela de Cadastro</h2>
        <fieldset> 
            <legend>Preencha os campos</legend>
            <form method="POST" action="insert.php">
                <input type="email" name="email" required placeholder="email">
                <input type="text" name="login" required placeholder="login">
                <input type="password" name="senha" required placeholder="senha">
                <select name="nivel_acesso"> 
                    <option selected disable>Selecione o Nível de Acesso</option> 
                    <option value="Administrador">Administração</option>
                    <option value="Usuário">Usuário</option>
                    <option value="Visitante">Visitante</option>
                </select>
                <input type="submit" value="Cadastrar">
        
            </form>
        </fieldset>
        <table style="width: 80%";margin:20px auto>
            <tr style="background: #000; color: #FFF">
            <hr>
            <th colspan="4"> Lista de Usuários</th>                
            </tr>
            <tr style="background": #333; color: #FFF">
                <td>Email</td>
                <td>Login</td>
                <td>Senha</td>
                <td>Nivel de Acesso</td>
            </tr>
            <?php
                //inclui arquivo conecta
                include_once 'conecta_php.php';
                //seleciona o banco
                mysqli_select_db($link, "sys_mysql");
                /*
                 * Selecionar um ou vários campos
                 * sintaxe: SELECT campo, campo FROM tabela 
                 */
                $query = "SELECT * FROM usuario ORDER BY ID_USUARIO DESC";
                //executa a instrução SQL
                $result = mysqli_query($link, $query);
                /*
                 * verifica se retornou registro
                 */
                if (mysqli_num_rows($result)) {
                    
                    /*
                     * função que armazena registros em um array
                     */
                    
                    /*while($linha = mysqli_fetch_array($result)) {
                        print "<pre>";
                        print_r($linha);
                    }*/
                    while($linha = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <tr>
                            <td><?php print $linha['Email'] ?></td>
                            <td><?=$linha['Login']?></td>
                            <td><?=$linha['Senha']?></td>
                            <td><?=$linha['Nivel_Acesso']?></td>
                        </tr>
                        
                        <?php
                        
                  
                    }
                    
                    
                } else {
                    print "Nenhum registro foi encontrado";
                }
            ?>
        </table>
    </body>
</html>
