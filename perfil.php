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
                        <a href="perfil.php" id="perfil" class="color_active"><div class="icon"><img class="img_icon" src="assets/img/icons/perfil_laranja.png"></div>My Profile</a>
                        <a href="time.php" id="time" onmouseover="mouseEmCimaTime(this)" onmouseout="mouseForaTime(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/time.png" id="img_time"></div>Our team</a>
                        <a href="agenda.php" id="agenda" onmouseover="mouseEmCimaAgenda(this)" onmouseout="mouseForaAgenda(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/agenda.png" id="img_agenda"></div>Diary</a>
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
                    <div class="perfil">
                        <div class="header_perfil">
                            <h1>Complete you porfile to receive the press kit</h1>
                            <h3>We will use you photo and information for the convention and awards</h3>
                        </div>
                        <div class="perfil_container">
                            <div class="perfil_infos">
                                <?php 
                                    $id = $_SESSION['id'];
                                    $sql = "SELECT * FROM cadastro WHERE id = $id ";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                    ?>  
                                        <div class="nome_perfil infos_perfil">
                                            <h1>Full name</h1>
                                            <h3><?php echo $dados['nome']; ?></h3>
                                        </div>
                                        <div class="email_perfil infos_perfil">
                                            <h1>Email</h1>
                                            <h3><?php echo $dados['email']; ?></h3>
                                        </div>
                                        <div class="pais_perfil infos_perfil">
                                            <h1>Country</h1>
                                            <h3><?php echo $dados['pais']; ?></h3>
                                        </div>
                                        <div class="tipo_documento_perfil infos_perfil">
                                            <h1>Document Type</h1>
                                            <h3><?php echo $dados['tipo_documento']; ?></h3>
                                        </div>
                                        <div class="documento_perfil infos_perfil">
                                            <h1>Document</h1>
                                            <h3><?php echo $dados['cpf']; ?></h3>
                                        </div>
                                        <div class="data_nascimento_perfil infos_perfil">
                                            <h1>Birthdate</h1>
                                            <h3><?php echo $dados['data_nascimento']; ?></h3>
                                        </div>
                                        <div class="cargo_perfil infos_perfil">
                                            <h1>Role</h1>
                                            <h3><?php echo $dados['cargo']; ?></h3>
                                        </div>
                                        <div class="endereco_perfil infos_perfil">
                                            <h1>Edress</h1>
                                            <h3><?php echo $dados['endereco']; ?></h3>
                                        </div>
                                        <div class="tamanho_camiseta_perfil infos_perfil">
                                            <h1>T-shirt size</h1>
                                            <h3><?php echo $dados['tamanho_camiseta']; ?></h3>
                                        </div>
                                        <div class="tamanho_calca_perfil infos_perfil">
                                            <h1>Pants size</h1>
                                            <h3><?php echo $dados['tamanho_calca']; ?></h3>
                                        </div>
                                        <div class="tamanho_chinelo_perfil infos_perfil">
                                            <h1>Flil flop size</h1>
                                            <h3><?php echo $dados['tamanho_chinelo']; ?></h3>
                                        </div>
                                        <div class="musica_perfil infos_perfil">
                                            <h1>Music</h1>
                                            <h3><?php echo $dados['musica']; ?></h3>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div class="btn_atualizar">
                                <a href="atualizar_perfil.php?id=<?php echo $id; ?>" class="atualizar_btn">UPDATE PROFILE</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </section>
        </div>
    </body>
</html>