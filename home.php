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
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

        <!-- !FAVICON! -->
        <link rel="shortcut icon" alt="Logo Sales Meeting" href="assets/img/Imageam2.png" type="image/x-icon">

        <!-- !JavaScript! -->
        <script src="assets/js/program.js"></script>
        <script src="assets/js/timer.js"></script>

    
    </head>
    <body>
        <div class="home_page">
            <section class="menu">
                <div class="logo">
                    <div class="img_logo">
                        <a href="home.php"><img class="logo_img" id="logo" src="assets/img/Imageam2.png" alt="Logo Sales Meeting 2024"></a>
                    </div>
                    <div class="titulo_logo">
                        <h1>Sales Meeting</h1>
                        <h1>2024</h1>
                    </div>
                </div>
                <div class="header_menu" id="header_menu">
                    <nav class="menu_header">
                        <a href="home.php" class="color_active"><div class="icon"><img class="img_icon" src="assets/img/icons/home_laranja.png"></div>Home</a>
                        <a href="perfil.php" id="perfil" onmouseover="mouseEmCimaPerfil(this)" onmouseout="mouseForaPerfil(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/perfil.png" id="img_perfil"></div>My Profile</a>
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
                    <div class="cards">
                        <div class="card1">
                            <div class="container_card1">
                                <h1>Complete your profile</h1>
                                <h1>to receive the press kit</h1>
                                <h3>Find out who your roommate will be.</h3>
                                <div class="botoes_card1">
                                    <a href="perfil.php" class="btn_complete">Complete</a>
                                    <a href="time.php" class="btn_ourteam">Our team</a>
                                </div>
                            </div>
                            <div class="img_card1">
                                <img class="card1_img" src="assets/img/icons/perfil_check_branco.png" alt="">
                            </div>
                        </div>
                        <div class="card2">
                            <div class="container_card2">
                                <h1>Check out the agenda</h1>
                                <h1>preview</h1>
                                <div class="botoes_card2">
                                    <a href="agenda.php" class="btn_agenda">Agenda</a>
                                </div>
                            </div>
                            <div class="img_card2">
                                <img class="card2_img" src="assets/img/icons/agenda_branco.png" alt="">
                            </div>
                        </div>
                        <div class="card3">
                            <div class="container_card3">
                                <h1>Discover the place</h1>
                                <h1>Coming soon!</h1>
                                <div class="botao_card3">
                                    <a class="btn_discover" href="https://www.intercontinental.com/hotels/us/en/find-hotels/hotel-search?fromRedirect=true&qSrt=sBR&qDest=Cartagena%20De%20Indias,%20Colombia&setPMCookies=true&dp=true&gclid=CjwKCAiA-P-rBhBEEiwAQEXhH9eo54iM3vfZ_83SuiCQewQGhUuDrXuy7LgfzeftAIRQUWl3k_91ShoCpjEQAvD_BwE&cm_mmc=PDSEA-_-G_F-AMER_FS-MLAC_H-AMER_HS-COL_IC_BSF_EXM_HOTEL-CTGHA_EN&srb_u=1&qChAge=">Discover</a>
                                </div>
                            </div>
                            <div class="img_card3">
                                <img class="card3_img" src="assets/img/icons/brasil_branco.png" alt="">
                            </div>
                        </div>
                        <div class="card4">
                            <div class="container_card4">
                                <h1>Access our playlist and add the songs that can't be missed at our party</h1>
                                <div class="botao_card4">
                                    <a class="btn_spotify" href="https://open.spotify.com/playlist/6yySu0GmAwOiORcFQNbi22?si=6f338888672d4b54&pt=6fcbe080bbe1eabf1fe045e55a0631fa">Access</a>
                                </div>
                            </div>
                            <div class="img_card4">
                                <img class="card4_img" src="assets/img/icons/spotify_branco.png" alt="">
                            </div>
                        </div>
                        <div class="card5">
                            <div class="container_card5">
                                <h1>Something new coming soon...our sound!</h1>
                                <div class="botao_card5">
                                    <a class="btn_song" href="">teste</a>
                                </div>
                            </div>
                            <div class="img_card5">
                                <img class="card5_img" src="assets/img/icons/musica_branco.png" alt="">
                            </div>
                        </div>
                        <div class="timer">
                            <div class="titulo_timer">
                                <h1>Left:</h1>
                            </div>
                            <div id="contReg" class="contador">
                                <div class="dias">
                                    <div id="dias">0 :</div>
                                    <h3>days</h3>
                                </div>
                                <div class="horas">
                                    <div id="horas">0 :</div>
                                    <h3>hours</h3>
                                </div>
                                <div class="minutos">
                                    <div id="minutos">0 :</div>
                                    <h3>min</h3>
                                </div>
                                <div class="segundos">
                                    <div id="segundos">0 :</div>
                                    <h3>sec</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </section>
        </div>
    </body>
</html>