<?php
    require_once("../conexao/conexao.php");

    session_start();
    unset($_SESSION["user_portal"]);
    header("location:index.php");
?>
