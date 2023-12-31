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
        <div class="container_login">
            <div class="login">
                <div class="header_login">
                    <div class="titulo_login">
                        <h1>Sales Meeting 2024</h1>
                    </div>
                    <div class="subtitulo_login">
                        <h3>Access and stay up to date with the event!</h3>
                    </div>
                </div>
                <form class="forms_login" action="painel/processa_login.php" method="POST">
                    <div class="login_forms">
                        <input type="email" name="email_login"  placeholder="username">
                        <input type="password" name="senha_login"  placeholder="password">
                    </div>
                    <div class="btn_login">
                        <button class="login_btn" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
            <div class="img_login">
                <img class="login_img" src="assets/img/Baxter_ShapeTheFuture_WebsiteHeader_v01.png" alt="">
            </div>
        </div>
    </body>
</html>