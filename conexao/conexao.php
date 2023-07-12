<?php
    $servidor = "-----";
    $user = "-----";
    $senha = "------";
    $banco = "-----";
    $conexao = mysqli_connect($servidor, $user, $senha, $banco);
    if(mysqli_connect_errno()){
        die("Conexão falhou. Erro: " . mysqli_connect_errno());
    }

?>
