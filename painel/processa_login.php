<?php
    session_start();
    require('conecta.php');
    $email = $_POST['email_login'];
    $senha = $_POST['senha_login'];

    //$senha = md5($senha);


    $consulta = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;
    $resultado_usuario = mysqli_fetch_assoc($resultado);

    if($registros<>0){
        //echo "TE ACHEI";
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['email'] = $resultado_usuario['email'];


        header('Location: ../home.php');
    }
    else{
        header('Location: ../index.php');
    }
?>