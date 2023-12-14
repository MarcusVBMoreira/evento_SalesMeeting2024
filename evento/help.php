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

        <!-- JavaScript! -->
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
                    <a class="help_a" href="help.php" class="color_active"><div class="icon_help"><img class="img_icon" src="assets/img/icons/question_laranja.png"></div>Help</a>
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
                    <div class="help_header">
                        <h1>Help & Support</h1>
                    </div>
                    <div class="container_help">
                        <div class="help_part1 card_help">
                            <h3>For questions regarding the issuance of airline tickets and accommodation, contact BCD or Jéssika Barros (jessika_barros@baxter.com)</h3>
                            <div class="help_card">
                                <?php
                                    $sql = "SELECT * FROM cadastro WHERE id = 63";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                        ?>
                                        <div class="card_time">
                                            <div class="card_img">
                                                <div class="img_time">
                                                    <div class="tamanho_img_time">
                                                        <img class="img_time" style="border-radius: 50%; width: 80%" src="upload/<?php echo($dados['imagem']);?> " alt="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <?php
                                                echo"<div class='nome_time_'>";
                                                    echo"<h2>" . $dados['nome'] . "</h2>";
                                                echo"</div>";
                                            ?>
                                            <?php 
                                                $diretorio = "assets/img/contry/";
                                                $extensao = '.png';
                                                $contry = $diretorio.$dados['contry'].$extensao;
                                            ?>
                                            <img src="<?php echo $contry ?>" class="_img_pais">
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="help_part2 card_help">
                            <h3>For other questions, contact the Mkt Analyst in your area and country:</h3>
                            <div class="help_card">
                                <?php
                                    $sql = "SELECT * FROM cadastro WHERE id = 57";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                        ?>
                                        <div class="card_time_">
                                            <div class="card_img">
                                                <div class="img_time">
                                                    <div class="tamanho_img_time_">
                                                        <img class="img_time" style="border-radius: 50%; width: 80%" src="upload/<?php echo($dados['imagem']);?> " alt="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <?php
                                                echo"<div class='nome_time_'>";
                                                    echo"<h2>" . $dados['nome'] . "</h2>";
                                                echo"</div>";
                                                echo"<div class='email_time'>";
                                                    echo"<h2>" .$dados['email']. "</h2>";
                                                echo"</div>";
                                            ?>
                                            <?php 
                                                $diretorio = "assets/img/contry/";
                                                $extensao = '.png';
                                                $contry = $diretorio.$dados['contry'].$extensao;
                                            ?>
                                                <img src="<?php echo $contry ?>" class="img_pais_">
                                            </div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    $sql = "SELECT * FROM cadastro WHERE id = 55";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                        ?>
                                        <div class="card_time_">
                                            <div class="card_img">
                                                <div class="img_time">
                                                    <div class="tamanho_img_time_">
                                                        <img class="img_time" style="border-radius: 50%; width: 80%" src="upload/<?php echo($dados['imagem']);?> " alt="">
                                                    </div>
                                                </div> 
                                            </div>
                                            <?php
                                                echo"<div class='nome_time_'>";
                                                    echo"<h2>" . $dados['nome'] . "</h2>";
                                                echo"</div>";
                                                echo"<div class='email_time'>";
                                                    echo"<h2>" .$dados['email']. "</h2>";
                                                echo"</div>";
                                            ?>
                                            <?php 
                                                $diretorio = "assets/img/contry/";
                                                $extensao = '.png';
                                                $contry = $diretorio.$dados['contry'].$extensao;
                                            ?>
                                            <img src="<?php echo $contry ?>" class="img_pais_">
                                        </div>
                                        <?php
                                    }
                                ?>
                                <?php
                                    $sql = "SELECT * FROM cadastro WHERE id = 53";
                                    $consulta = $conexao->query($sql);
                                    while ($dados = $consulta->fetch_assoc()){
                                        ?>
                                            <div class="card_time_">
                                                <div class="card_img">
                                                    <div class="img_time">
                                                        <div class="tamanho_img_time_">
                                                            <img class="img_time" style="border-radius: 50%; width: 80%" src="upload/<?php echo($dados['imagem']);?> " alt="">
                                                        </div>
                                                    </div> 
                                                </div>
                                                <?php
                                                    echo"<div class='nome_time_'>";
                                                        echo"<h2>" . $dados['nome'] . "</h2>";
                                                    echo"</div>";
                                                    echo"<div class='email_time'>";
                                                        echo"<h2>" .$dados['email']. "</h2>";
                                                    echo"</div>";
                                                ?>
                                                <?php 
                                                    $diretorio = "assets/img/contry/";
                                                    $extensao = '.png';
                                                    $contry = $diretorio.$dados['contry'].$extensao;
                                                ?>
                                                <img src="<?php echo $contry ?>" class="img_pais_">
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