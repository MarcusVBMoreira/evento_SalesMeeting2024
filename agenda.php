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
                        <a href="perfil.php" id="perfil" onmouseover="mouseEmCimaPerfil(this)" onmouseout="mouseForaPerfil(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/perfil.png" id="img_perfil"></div>My Profile</a>
                        <a href="time.php" id="perfil" onmouseover="mouseEmCimaTime(this)" onmouseout="mouseForaTime(this)"><div class="icon"><img class="img_icon" src="assets/img/icons/time.png" id="img_time"></div>Our team</a>
                        <a href="agenda.php" class="color_active"><div class="icon"><img class="img_icon" src="assets/img/icons/agenda_laranja.png"></div>Diary</a>
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
                    <div class="agenda_container">
                        <div class="header_agenda">
                            <h1>Agenda</h1>
                            <h2>Check out the preview</h2>
                        </div>
                        <div class="container_dias">
                            <div class="dia22 card_dia">
                                <h1>LUNES 22</h1>
                                <h3>8:00 AM - 12:00 PM / VUELOS HACIA CARTAGENA</h3>
                                <h3>12:00 PM - 14:00 PM / Almuerzo de bienvenida Salón del hotel aire acondicionado</h3>
                                <h3>14:00 PM - 16:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>16:00 PM - 16:30 PM / Break PM</h3>
                                <h3>16:30 PM - 17:30 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>17:30 PM - 18:30 PM / Libre/Preparación</h3>
                                <h3>18:00 PM / Cóctel de Bienvenida Terraza/ roof top con piscina Aire libre, bastante viento</h3>
                            </div>
                            <div class="dia23 card_dia">
                                <h1>MARTES 23</h1>
                                <h3>8:00 AM - 10:00 AM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>10:00 AM - 10:30 AM / Break AM</h3>
                                <h3>10:30 AM - 12:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>13:00 PM - 14:00 PM / Almuerzo Salón del hotel aire acondicionado</h3>
                                <h3>14:00 PM - 16:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>16:00 PM - 16:30 PM / Break PM</h3>
                                <h3>16:30 PM - 17:30 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>17:30 PM - 19:00 PM / Libre/Preparación</h3>
                                <h3>19:00 PM / Sales Elite Party Salón del hotel aire acondicionado</h3>
                            </div>
                            <div class="dia24 card_dia">
                                <h1>MIERCOLES 24</h1>
                                <h3>8:00 AM - 10:00 AM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>10:00 AM - 10:30 AM / Break AM</h3>
                                <h3>10:30 AM - 12:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>13:00 PM - 14:00 PM / Almuerzo Salón del hotel aire acondicionado</h3>
                                <h3>14:00 PM - 16:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>16:00 PM - 16:30 PM / Break PM</h3>
                                <h3>16:30 PM / Libre</h3>
                            </div>
                            <div class="dia25 card_dia">
                                <h1>JUEVES 25</h1>
                                <h3>8:00 AM - 10:00 AM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>10:00 AM - 10:30 AM / Break AM</h3>
                                <h3>10:30 AM - 12:00 PM / Plenaria Salón del hotel aire acondicionado</h3>
                                <h3>13:00 PM - 14:00 PM / Almuerzo Salón del hotel aire acondicionado</h3>
                                <h3>14:00 PM - 14:15 PM / Check Out</h3>
                                <h3>14:15 PM / VUELOS DE REGRESO A CASA</h3>
                            </div>
                        </div>
                        <div>
                            <h2>Click to see models of <a class="dress_code" href="assets/img/Slide3.PNG" target="_blank" rel="noopener noreferrer">Dress Code 1</a> and <a style="color: #0000ff;" class="dress_code" href="assets/img/Slide4.PNG" target="_blank" rel="noopener noreferrer">Dress Code 2</a>.</h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>