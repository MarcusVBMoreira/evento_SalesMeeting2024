<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email']; 
    $senha_simples = $_POST['senha'];
    $senha = md5($senha_simples);
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $sobre = $_POST['sobre'];
    $pais = $_POST['pais'];
    $endereco = $_POST['endereco'];
    $imagem = $_POST['imagem'];
    $tamanho_chinelo = $_POST['tamanho_chinelo'];
    $tamanho_camiseta = $_POST['tamanho_camiseta'];
    $tamanho_calca = $_POST['tamanho_calca'];
    $musica = $_POST['musica'];
    $data_nascimento = $_POST['data_nascimento'];
    $tipo_documento = $_POST['tipo_documento'];
    $alergia = $_POST['alergia'];

    $sql = "INSERT INTO cadastro (nome, email, senha, cpf, cargo, sobre, pais, endereco, imagem, tamanho_chinelo, tamanho_camiseta, tamanho_calca, musica, data_nascimento, tipo_documento, alergia)
    VALUES ('$nome', '$email', '$senha', '$cpf', '$cargo', '$sobre', '$pais', '$endereco', '$imagem', '$tamanho_chinelo', '$tamanho_camiseta', '$tamanho_calca', '$musica', '$data_nascimento', '$tipo_documento', '$alergia')";

    $conexao->query($sql);

    header('Location: ../index.php');
?>