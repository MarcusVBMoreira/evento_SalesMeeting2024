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
        $voo = $dados['voo'];   
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
            </header>
            <div class="atualizar">
                <div class="atualizar_header">
                    <h1>Update the information</h1>
                </div>
                <div class="container_atualizar">
                    <div class="img_atualizar">
                        <div>
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
                        <div class="mudar_foto_btn">
                            <a class="btn_mudar_foto" href="mudar_foto.php?id=<?php echo $id; ?>">change profile photo</a>
                        </div>
                    </div>
                    <form action="painel/perfil_atualizar.php?id=<?php echo $id ?>" method="POST" class="forms_atualizar" enctype="multipart/form-data">
                        <div class="atualizar_forms">
                            <div class="item_forms_atualizar">
                                <label for="nome">Name</label>
                                <input type="text" name="nome_novo" id="nome" placeholder="Your full Name" value="<?php echo $nome; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="email">Email</label>
                                <input type="text" name="email_novo" id="email" placeholder="Your email" value="<?php echo $email; ?>" required> 
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="data_nascimento">Birthdate</label>
                                <input type="date" name="data_nascimento_novo" id="data_nascimento" value="<?php echo $data_nascimento; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="pais">Country</label>
                                <input type="text" placeholder="Your country" list="faixa" name="pais_novo" id="pais" value="<?php echo $pais; ?>" required>
                                <datalist id="faixa">
                                    <option value="">County:</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Colômbia">Colômbia</option>
                                    <option value="Mexico">Mexico</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tipo_documento">Document type</label>
                                <input type="text" placeholder="Document Type" list="documento" id="tipo_documento" name="tipo_documento_novo" value="<?php echo $tipo_documento; ?>" required>
                                <datalist id="documento">
                                    <option value="">Type</option>
                                    <option value="CPF">CPF</option>
                                    <option value="Passaport">Passaport</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="cpf">Document number</label>
                                <input type="text" name="cpf_novo" id="cpf" placeholder="CPF" placeholder="Write the number of your document" value="<?php echo $cpf; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="endereco">Eddress</label>
                                <input type="text" name="endereco_novo" id="endereco" placeholder="Your home address" value="<?php echo $endereco; ?>" required> 
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="cargo">Role</label>
                                <input type="text" name="cargo_novo" id="cargo" placeholder="Your position in the company" value="<?php echo $cargo; ?>" required> 
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="sobre">About</label>
                                <input type="text" name="sobre_novo" id="sobre" placeholder="About you" value="<?php echo $sobre; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="formacao">Graduation</label>
                                <input type="text" name="formacao_novo" id="formacao" placeholder="your graduation" value="<?php echo $formacao; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="idiomas">Languages</label>
                                <input type="text" name="idiomas_novo" id="idiomas" placeholder="Languages you speak" value="<?php echo $idiomas; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="musica">Music</label>
                                <input type="text" name="musica_novo" id="musica" placeholder="Your favorite song or favorite singer/band" value="<?php echo $musica; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="signo">Sign</label>
                                <input type="text" name="signo_novo" id="signo" placeholder="Your sign" value="<?php echo $signo; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="pets">Pets</label>
                                <input type="text" name="pets_novo" id="pets" placeholder="If you have pets, whats are they" value="<?php echo $pets; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="interesses">Interests</label>
                                <input type="text" name="interesses_novo" id="interesses" placeholder="Your interests" value="<?php echo $interesses; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" name="linkedin_novo" id="linkedin" placeholder="URL of your Linkedin" value="<?php echo $linkedin; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="fuma">You Smoke</label>
                                <input type="text" name="fuma_novo" id="fuma" placeholder="Yes ou no" value="<?php echo $fuma ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="restricao">Dietary restriction</label>
                                <input type="text" name="restricao_novo" id="restricao" placeholder="If you have any dietary restrictions, write here" value="<?php echo $restricao; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_camiseta">T-shirt size</label>
                                <input type="text" name="tamanho_camiseta_novo" id="tamanho_camiseta" placeholder="T-shirt size" value="<?php echo $tamanho_camiseta; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_calca">Pants size</label>
                                <input type="text" name="tamanho_calca_novo" id="tamanho_calca" placeholder="Pants size" value="<?php echo $tamanho_calca; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_chinelo">Flip flop size</label>
                                <input type="text" name="tamanho_chinelo_novo" id="tamanho_chinelo" placeholder="Flip flop size" value="<?php echo $tamanho_chinelo; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="voo">About the flight</label>
                                <input type="text" name="voo" id="voo" placeholder="Which airport do you want to leave from and at what time?" value="<?php echo $voo; ?>" required>
                            </div>
                        </div>
                        <div class="atualizar_forms_btn">
                            <a href="perfil.php" type="button" class="fotms_atualizar_btn voltar_atualizar">Back</a>
                            <button type="submit" class="fotms_atualizar_btn atualizar_atualizar">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>