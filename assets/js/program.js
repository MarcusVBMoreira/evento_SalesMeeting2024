/* !IMG HOME! */
function mouseEmCimaHome() {
    document.getElementById("img_home").src="assets/img/icons/home_laranja.png";
    document.getElementById("home").style.color="var(--Laranja-cor)";
} 
 function mouseForaHome() {
    document.getElementById("img_home").src="assets/img/icons/home.png";
    document.getElementById("home").style.color="var(--Preto-cor)";
}

/* !IMG PERFIL! */
function mouseEmCimaPerfil() {
    document.getElementById("img_perfil").src="assets/img/icons/perfil_laranja.png";
    document.getElementById("perfil").style.color="var(--Laranja-cor)";
} 
 function mouseForaPerfil() {
    document.getElementById("img_perfil").src="assets/img/icons/perfil.png";
    document.getElementById("perfil").style.color="var(--Preto-cor)";
}

/* !IMG TIME! */
function mouseEmCimaTime() {
    document.getElementById("img_time").src="assets/img/icons/time_laranja.png";
    document.getElementById("time").style.color="var(--Laranja-cor)";
} 
 function mouseForaTime() {
    document.getElementById("img_time").src="assets/img/icons/time.png";
    document.getElementById("time").style.color="var(--Preto-cor)";
}

/* !IMG AGENDA! */
function mouseEmCimaAgenda() {
    document.getElementById("img_agenda").src="assets/img/icons/agenda_laranja.png";
    document.getElementById("agenda").style.color="var(--Laranja-cor)";
} 
 function mouseForaAgenda() {
    document.getElementById("img_agenda").src="assets/img/icons/agenda.png";
    document.getElementById("agenda").style.color="var(--Preto-cor)";
}

/* !IMG NOTIFICACAO! */
function mouseEmCimaNotificacao() {
    document.getElementById("img_notificacao").src="assets/img/icons/notificacao_laranja.png";
    document.getElementById("notificacao").style.color="var(--Laranja-cor)";
} 
 function mouseForaNotificacao() {
    document.getElementById("img_notificacao").src="assets/img/icons/notificacao.png";
    document.getElementById("notificacao").style.color="var(--Preto-cor)";
}

/* !IMG SAIR! */
function mouseEmCimaSair() {
    document.getElementById("img_sair").src="assets/img/icons/sair_laranja.png";
    document.getElementById("sair").style.color="var(--Laranja-cor)";
} 
 function mouseForaSair() {
    document.getElementById("img_sair").src="assets/img/icons/sair.png";
    document.getElementById("sair").style.color="var(--Preto-cor)";
}

/* !IMG HELP! */
function mouseEmCimaQuestion() {
    document.getElementById("img_question").src="assets/img/icons/question_laranja.png";
    document.getElementById("question").style.color="var(--Laranja-cor)";
} 
 function mouseForaQuestion() {
    document.getElementById("img_question").src="assets/img/icons/question.png";
    document.getElementById("question").style.color="var(--Preto-cor)";
}

/* !IMG SETA 1! */
function mouseEmCimaSeta1(imagem) {
    imagem.src="assets/img/icons/seta.png";
} 
 function mouseForaSeta1(imagem) {
    imagem.src="assets/img/icons/seta_roxo.png";
}

/* !IMG SETA 2! */
function mouseEmCimaSeta2(imagem) {
    imagem.src="assets/img/icons/seta.png";
} 
 function mouseForaSeta2(imagem) {
    imagem.src="assets/img/icons/seta_roxo.png";
}

/* !IMG SETA 3! */
function mouseEmCimaSeta3(imagem) {
    imagem.src="assets/img/icons/seta.png";
} 
 function mouseForaSeta3(imagem) {
    imagem.src="assets/img/icons/seta_roxo.png";
}

/* !IMG SETA 4! */
function mouseEmCimaSeta4(imagem) {
    imagem.src="assets/img/icons/seta.png";
} 
 function mouseForaSeta4(imagem) {
    imagem.src="assets/img/icons/seta_roxo.png";
}

/* !IMG SETA 5! */
function mouseEmCimaSeta5(imagem) {
    imagem.src="assets/img/icons/seta.png";
} 
 function mouseForaSeta5(imagem) {
    imagem.src="assets/img/icons/seta_roxo.png";
}   



/* Menu responsivo */
function menu_clicou(){
    document.getElementById('menu-icon').classList.toggle('bx-x');
    document.getElementById('menu_responsivo').classList.toggle('active');
    document.getElementById('perfil_header').classList.toggle('active');
    document.getElementById('header_menu').classList.toggle('active');
    document.getElementById('sair').classList.toggle('active');
}