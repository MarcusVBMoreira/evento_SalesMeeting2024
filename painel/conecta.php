<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "evento";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        echo "ERRO DE CONEXÃO!";
    }
?>
