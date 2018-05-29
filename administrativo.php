<?php

session_start();
echo "Olá ".$_SESSION['nome']."<br>";
echo "<a href='sair.php'> Sair</a>";

