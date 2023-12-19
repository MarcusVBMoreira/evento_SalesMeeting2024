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
        $alergia = $dados['alergia_novo'];   
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

        <style>
            
        </style>

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
                                <input type="text" placeholder="Your country" list="pais_list" name="pais_novo" id="pais" value="<?php echo $pais; ?>" required>
                                <datalist id="pais_list">
                                    <option value="">County:</option>
                                    <option value="brasil">Brasil</option>
                                    <option value="colombia">Colômbia</option>
                                    <option value="mexico">Mexico</option>
                                    <option value="chile">Chile</option>
                                    <option value="equador">Equador</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tipo_documento">Document Type</label>
                                <input type="text" placeholder="Document Type" list="documento_list" id="tipo_documento" name="tipo_documento_novo" value="<?php echo $tipo_documento; ?>" required>
                                <datalist id="documento_list">
                                    <option value="">Type:</option>
                                    <option value="Citizenship card">Citizenship card</option>
                                    <option value="Passaport">Passaport</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="cpf">Document number</label>
                                <input type="text" name="cpf_novo" id="cpf" placeholder="Write the number of your document" value="<?php echo $cpf; ?>" required>
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
                                <input type="text" name="idiomas_novo" id="idiomas" list="lingua_list" placeholder="Languages you speak" value="<?php echo $idiomas; ?>" required>
                                <datalist id="lingua_list">
                                    <option value="">Language:</option>
                                    <option value="Portuguese">Portuguese</option>
                                    <option value="English">English</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Portuguese and English">Portuguese and English</option>
                                    <option value="Portuguese and Spanish">Portuguese and Spanish</option>
                                    <option value="English and Spanish">English and Spanish</option>
                                    <option value="Portuguese, English and Spanish">Portuguese, English and Spanish</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="musica">Music</label>
                                <input type="text" name="musica_novo" id="musica" placeholder="Your favorite song or favorite singer/band" value="<?php echo $musica; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="signo">Sign</label>
                                <input type="text" name="signo_novo" id="signo" list="signo_list" placeholder="Your sign" value="<?php echo $signo; ?>" required>
                                <datalist id="signo_list">
                                    <option value="">Sign:</option>
                                    <option value="Aries">Aries</option>
                                    <option value="Taurus">Taurus</option>
                                    <option value="Gemini">Gemini</option>
                                    <option value="Cancer">Cancer</option>
                                    <option value="Leo">Leo</option>
                                    <option value="Virgo">Virgo</option>
                                    <option value="Libra">Libra</option>
                                    <option value="Scorpio">Scorpio</option>
                                    <option value="Sagittarius">Sagittarius</option>
                                    <option value="Capricorn">Capricorn</option>
                                    <option value="Aquarius">Aquarius</option>
                                    <option value="Pisces">Pisces</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="pets">Pets</label>
                                <input type="text" name="pets_novo" id="pets" placeholder="If you have pets, whats are they" value="<?php echo $pets; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="interesses">Interests</label>
                                <input type="text" name="interesses_novo" id="interesses" placeholder="Your interests (ex: music, reading, traveling and dancing)" value="<?php echo $interesses; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" name="linkedin_novo" id="linkedin" placeholder="URL of your Linkedin" value="<?php echo $linkedin; ?>" required>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="fuma">You Smoke</label>
                                <input type="text" name="fuma_novo" id="fuma" list="fuma_list" placeholder="Yes ou no" value="<?php echo $fuma ?>" required>
                                <datalist id="fuma_list">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="restricao">Dietary restriction</label>
                                <input type="text" name="restricao_novo" id="restricao_novo" list="restricao" placeholder="If you have any dietary restrictions, write here" value="<?php echo $restricao; ?>" required>
                                <datalist id="restricao">
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Vegan">Vegan</option>
                                    <option value="None">None</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_camiseta">T-shirt size</label>
                                <input type="text" name="tamanho_camiseta_novo" list="camiseta_list" id="tamanho_camiseta" placeholder="T-shirt size" value="<?php echo $tamanho_camiseta; ?>" required>
                                <datalist id="camiseta_list">
                                    <option value="">Size:</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="GG">GG</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_calca">Pants size</label>
                                <input type="text" name="tamanho_calca_novo" list="calca_list" id="tamanho_calca" placeholder="Pants size" value="<?php echo $tamanho_calca; ?>" required>
                                <datalist id="calca_list">
                                    <option value="">Size:</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                    <option value="GG">GG</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="tamanho_chinelo">Flip flop size (Brazilian size)</label>
                                <input type="text" name="tamanho_chinelo_novo" list="chinelo_list" id="tamanho_chinelo" placeholder="Flip flop size" value="<?php echo $tamanho_chinelo; ?>" required>
                                <datalist id="chinelo_list">
                                    <option value="">Size:</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                </datalist>
                            </div>
                            <div class="item_forms_atualizar">
                                <label for="voo">Do you have any allergies?</label>
                                <input type="text" name="alergia_novo" id="alergia_novo" list="alergia" placeholder="If the answer is yes, write what it is" value="<?php echo $alergia; ?>" required>
                                <datalist id="alergia">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </datalist>
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