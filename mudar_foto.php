<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: index.php');
    }
    require('painel/conecta.php');
?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM cadastro WHERE id = $id";
    $consulta = $conexao->query($sql);
    while($dados = $consulta->fetch_assoc()){
        $nome = $dados['nome'];
        $email = $dados['email'];
        $data_nascimento = $dados['data_nascimento'];
        $pais = $dados['pais'];
        $tipo_documento = $dados['tipo_documento'];
        $cpf = $dados['cpf'];
        $endereco = $dados['endereco'];
        $cargo = $dados['cargo'];
        $sobre = $dados['sobre'];
        $imagem = $dados['imagem'];
        $formacao = $dados['formacao'];
        $idiomas = $dados['idiomas'];
        $musica = $dados['musica'];
        $signo = $dados['signo'];
        $pets = $dados['pets'];
        $interesses = $dados['interesses'];
        $linkedin = $dados['linkedin'];
        $fuma = $dados['fuma'];
        $restricao = $dados['restricao'];
        $tamanho_camiseta = $dados['tamanho_camiseta'];
        $tamanho_calca = $dados['tamanho_calca'];
        $tamanho_chinelo = $dados['tamanho_chinelo'];
        $alergia = $dados['alergia'];   
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sales Meeting 2024</title>

        <!-- !RESET! -->
        <link rel="stylesheet" href="assets/css/reset.css">

        <!-- !CSS! -->
        <link rel="stylesheet" href="assets/css/estilo.css">

        <!-- !FAVICON! -->
        <link rel="shortcut icon" alt="Logo Sales Meeting" href="assets/img/Imageam2.png" type="image/x-icon">

        <!-- !JavaScript! -->
        <script src="assets/js/program.js"></script>
        
    </head>
    <body>
        <div class="container_cadastro">
            <header class="header_atualizar">
                <div class="logo_atualizar">
                    <div class="img_logo">
                        <a href="home.php"><img class="logo_img" src="assets/img/Imageam2.png" alt="Logo Sales Meeting 2024"></a>
                    </div>
                    <div class="titulo_logo">
                        <h1>Sales Meeting</h1>
                        <h1>2024</h1>
                    </div>
                </div>
                <div class="perfil_header">
                    <div class="nome_header">
                        <h3><?php echo $_SESSION['nome']; ?></h3>
                    </div> 
                    <div class="img_header">
                        <div>
                            <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM cadastro WHERE id = $id ";
                                $consulta = $conexao->query($sql);
                                while ($dados = $consulta->fetch_assoc()){
                                    ?>
                                        <a href="perfil.php"><img class="header_img" style="border-radius: 20px;" src="upload/<?php echo($dados['imagem']);?>" alt=""></a>
                                    <?php
                                }
                            ?>
                        </div>  
                    </div>
                </div>
            </header>
            <div class="atualizar">
                <div class="atualizar_header">
                    <h1>Update the information</h1>
                </div>
                <div class="container_atualizar">
                    <div class="img_atualizar">
                        <?php
                            $id = $_SESSION['id'];
                            $sql = "SELECT * FROM cadastro WHERE id = $id ";
                            $consulta = $conexao->query($sql);
                            while ($dados = $consulta->fetch_assoc()){
                                ?>
                                    <a href="perfil.php" class="atualizar_img"><img class="header_img" style="width: 80%; border-radius: 30px;" src="upload/<?php echo($dados['imagem']);?>?>" alt=""></a>
                                <?php
                            }
                        ?>
                    </div>
                    <form action="painel/perfil_atualizar_imagem.php?id=<?php echo $id ?>" method="POST" class="forms_atualizar" enctype="multipart/form-data">
                        <div class="atualizar_forms_foto">
                            <div class="item_forms_atualizar">
                                <label for="imagem">change profile photo(the chosen photo must be of a square format)</label>
                                <input type="file" name="imagem_novo" id="nome" value="" required>
                            </div>
                            <div class="atualizar_forms_btn">
                                <a href="perfil.php" type="button" class="fotms_atualizar_btn voltar_atualizar">Back</a>
                                <button type="submit" class="fotms_atualizar_btn atualizar_atualizar">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>