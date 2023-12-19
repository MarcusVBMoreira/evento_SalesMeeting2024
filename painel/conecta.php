<?php
    //$servidor = "localhost";
    //$usuario = "u861018832_root";
    //$senha = "Sit3d@Baxt3r";
    //$banco = "u861018832_evento";

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "evento";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        echo "ERRO DE CONEXÃO!";
    }
?>
