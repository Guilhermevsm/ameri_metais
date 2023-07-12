<?php
    $servidor = "localhost";
    $user = "root";
    $senha = "aneis1961";
    $banco = "ameri";
    $conexao = mysqli_connect($servidor, $user, $senha, $banco);
    if(mysqli_connect_errno()){
        die("Conexão falhou. Erro: " . mysqli_connect_errno());
    }

?>