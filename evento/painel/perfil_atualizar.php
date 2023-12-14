<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.php');
    }
    require('conecta.php');

    $id = $_GET['id']; //Pega da URL

    $nome_novo = $_POST['nome_novo'];
    $email_novo = $_POST['email_novo'];
    $data_nascimento_novo = $_POST['data_nascimento_novo'];
    $pais_novo = $_POST['pais_novo'];
    $tipo_documento_novo = $_POST['tipo_documento_novo'];
    $cpf_novo = $_POST['cpf_novo'];
    $endereco_novo = $_POST['endereco_novo'];
    $cargo_novo = $_POST['cargo_novo'];
    $sobre_novo = $_POST['sobre_novo'];
    $formacao_novo = $_POST['formacao_novo'];
    $idiomas_novo = $_POST['idiomas_novo'];
    $musica_novo = $_POST['musica_novo'];
    $signo_novo = $_POST['signo_novo'];
    $pets_novo = $_POST['pets_novo'];
    $interesses_novo = $_POST['interesses_novo'];
    $linkedin_novo = $_POST['linkedin_novo'];
    $fuma_novo = $_POST['fuma_novo'];
    $restricao_novo = $_POST['restricao_novo'];
    $tamanho_camiseta_novo = $_POST['tamanho_camiseta_novo'];
    $tamanho_calca_novo = $_POST['tamanho_calca_novo'];
    $tamanho_chinelo_novo = $_POST['tamanho_chinelo_novo'];
    $voo = $_POST['voo'];
    
    $sql = "UPDATE cadastro SET nome = '$nome_novo', 
    email = '$email_novo', 
    data_nascimento = '$data_nascimento_novo', 
    pais = '$pais_novo', 
    tipo_documento = '$tipo_documento_novo', 
    cpf = '$cpf_novo', 
    endereco = '$endereco_novo',
    cargo = '$cargo_novo', 
    sobre = '$sobre_novo', 
    formacao = '$formacao_novo',
    idiomas = '$idiomas_novo',
    musica = '$musica_novo',
    signo = '$signo_novo',
    pets = '$pets_novo',
    interesses = '$interesses_novo',
    linkedin = '$linkedin_novo',
    fuma = '$fuma_novo',
    restricao = '$restricao_novo',
    tamanho_calca = '$tamanho_calca_novo',
    tamanho_camiseta = '$tamanho_camiseta_novo', 
    tamanho_chinelo = '$tamanho_chinelo_novo',
    voo = '$voo'
    WHERE id = '$id' ";

    $conexao->query($sql);

    header('Location: ../perfil.php');

?>