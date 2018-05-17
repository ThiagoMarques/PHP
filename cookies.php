<!DOCTYPE html>
<!--
MÉTODOS NATIVOS (VARIÁVEIS GLOBAIS)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Utilizando o método GET </h2>
        <form method = "GET">
            <span> Digite o seu nome </span>
            <input type = "text" name="nome" required>
            <span> Digite o sua senha </span>
            <input type = "password" name="senha" required>
            <input type="submit">
        </form>
        <?php
            /* $_GET[] depreciado */
            /* filter_input(METODO, NOME_CAMPO) */
            print 'Nome: ' .  filter_input(INPUT_GET, 'nome') . '<br>';
            print 'Senha: ' . filter_input(INPUT_GET, 'senha'). '<br>';
        ?>
        <h2> Utilizando o método POST </h2>
        
            <span> Digite sua data de nascimento </span>
            <input type="date" name="data" required>
            <span> Digite o número de dependentes </span>
            <input type="number" name="dependentes" required>
            <input type="submit">
        <?php
            /* filter input_array(METODO, FILTRO) */
            $POSTARRAY = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            /*print'<pre>';
            print_r($POSTARRAY);*/
            //print '<br>'. 'Data Nascimento: ' . $POSTARRAY['data'] . '<br>';
            //print 'Dependentes ' . $POSTARRAY['dependentes'] . '<br>';
            /* Formatando DATA */
            $dataU = date_create($POSTARRAY['data']);
            $dataBR = date_format($dataU, 'd/m/Y'); //Y maiúsculo 4 dias, y minúsculo 2 dias
            print '<br>'. 'Data Nascimento: ' . $dataBR . '<br>';
            print 'Dependentes ' . $POSTARRAY['dependentes'] . '<br>';
        ?>
            <h2> Utilizando o Método REQUEST </h2>
            <form method="POST"> 
                <span> Selecione seu gênero </span>
                <select name="genero">
                    <option name="M"> Masculino </option>
                    <option name="F"> Feminino </option>
                    <option name="O"> Outros </option>
                </select>
                <input type="submit">
            </form>
        <?php
                /* filter input(METODO, NOME_CAMPO) */
                //print 'Gênero: ' . filter_input(INPUT_REQUEST, 'genero');
                //print 'Gênero: ' . @$_REQUEST['genero'] . '<br>'; //não usado
                //
        ?>
        <h2> Utilizando o método FILES[NOME_CAMPO][TIPO_DADO]</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo" required>
            <input type="submit" value="Upload">
        </form>
        <?php
            print 'Arquivo: ' . @$_FILES ['arquivo']['name'] . '<br>';
            print 'Tipo: ' . @$_FILES ['arquivo']['type'] . '<br>';
            print 'Tamanho: : ' . @$_FILES ['arquivo']['size'] . '<br>';
        ?>
            
    </body>
</html>
