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
    $id_cliente = $_GET['id'];

    $sql = "SELECT * FROM cadastro WHERE id = $id_cliente";
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
        $tamanho_chinelo =$dados['tamanho_chinelo'];
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

        <!-- !ICON! -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- !CSS! -->
        <link rel="stylesheet" href="assets/css/estilo.css">

        <!-- !FAVICON! -->
        <link rel="shortcut icon" alt="Logo Sales Meeting" href="assets/img/Imageam2.png" type="image/x-icon"> 

        <!-- !JavaScript! -->
        <script src="assets/js/program.js"></script>
    
    </head>
    <body>
        <div class="home_page">
            <section class="menu">
                <div class="logo">
                    <div class="img_logo">
                        <a href="home.php"><img class="logo_img" src="assets/img/Imageam2.png" alt="Logo Sales Meeting 2024"></a>
                    </div>
                    <div class="titulo_logo">
                        <h1>Sales Meeting</h1>
                        <h1>2024</h1>
                    </div>
                </div>
                <div class="header_menu" id="header_menu">
                    <nav class="menu_header">
                        <a href="home.php" id="home" onmouseover="mouseEmCimaHome(this)" onmouseout="mouseForaHome(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/home.png" id="img_home"></div>Home</a>
                        <a href="perfil.php" id="perfil" onmouseover="mouseEmCimaPerfil(this)" onmouseout="mouseForaPerfil(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/perfil.png" id="img_perfil"></div>My Profile</a>
                        <a href="time.php" id="time" onmouseover="mouseEmCimaTime(this)" onmouseout="mouseForaTime(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/time.png" id="img_time"></div>Our team</a>
                        <a href="agenda.php" id="agenda" onmouseover="mouseEmCimaAgenda(this)" onmouseout="mouseForaAgenda(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/agenda.png" id="img_agenda"></div>Agenda</a>
                    </nav>
                </div>
                <div class="sair" id="sair">
                    <a class="sair_a" href="painel/sair.php" id="sair" onmouseover="mouseEmCimaSair(this)" onmouseout="mouseForaSair(this)"><div class="icon_"><img class="img_icon" src="assets/img/icons/sair.png" id="img_sair"></div>Sing Out</a>
                    <a class="help_a" href="help.php" id="question" onmouseover="mouseEmCimaQuestion(this)" onmouseout="mouseForaQuestion(this)"><div class="icon_help"><img class="img_icon" src="assets/img/icons/question.png" id="img_question"></div>Help</a>
                </div>
            </section>
            <i class='bx bx-menu' id="menu-icon" onclick="menu_clicou()"></i>
            <div class="menu_responsivo" id="menu_responsivo"></div>
            <section class="container_home">
                <header class="header_">
                    <div class="titulo_header">
                        <h1>Shape the future</h1>
                    </div>
                    <div class="perfil_header" id="perfil_header">
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
                <div class="home_container">
                    <div class="perfil_pessoa">
                        <div class="header_perfil">
                            <h1>Welcome to the profile of <?php echo $nome;?></h1>
                        </div>
                        <div class="perfil_container_pessoa">
                            <div class="img_perfil_pessoa">
                                <div class="perfil_pessoa_img">
                                    <?php 
                                        $id_cliente = $_GET['id'];
                                        $sql = "SELECT * FROM cadastro WHERE id = $id_cliente ";
                                        $consulta = $conexao->query($sql);
                                        while ($dados = $consulta->fetch_assoc()){
                                            ?>
                                            <img style="width: 100%; border-radius: 40px;" src="upload/<?php echo($dados['imagem']);?>" alt="">
                                            <?php
                                        }
                                    ?>     
                                </div>
                            </div>
                            <div class="perfil_infos_pessoa">
                                <?php 
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT * FROM cadastro WHERE id = $id ";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                    ?>  
                                        <div class="infos_perfil">
                                            <h1>Full name</h1>
                                            <h3><?php echo $nome; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Birthdate</h1>
                                            <h3><?php echo $data_nascimento; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Country</h1>
                                            <h3><?php echo $pais; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Role</h1>
                                            <h3><?php echo $cargo; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>About</h1>
                                            <h3><?php echo $sobre; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Graduation</h1>
                                            <h3><?php echo $formacao; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Languages</h1>
                                            <h3><?php echo $idiomas; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Favorit song</h1>
                                            <h3><?php echo $musica; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Sign</h1>
                                            <h3><?php echo $signo; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Pets</h1>
                                            <h3><?php echo $pets; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Interests</h1>
                                            <h3><?php echo $interesses; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Linkedin</h1>
                                            <h3><?php echo $linkedin; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Smoke?</h1>
                                            <h3><?php echo $fuma; ?></h3>
                                        </div>
                                        <div class="infos_perfil">
                                            <h1>Dietary restriction</h1>
                                            <h3><?php echo $restricao; ?></h3>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>   
            </section>
        </div>
    </body>
</html>