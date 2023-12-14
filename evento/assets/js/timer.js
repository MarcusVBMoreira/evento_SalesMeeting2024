/* !TIMER!*/
var dataFutura = new Date("January 22, 2024 14:00").getTime();
var dias,horas,minutos,segundos;

setInterval(function(){

    var dataAtual = new Date();
    var segundos_f = (dataFutura - dataAtual)/1000;

    dias = parseInt(segundos_f / 86400);
    segundos_f = parseInt(segundos_f % 86400);
    horas = parseInt(segundos_f / 3600);
    segundos_f = parseInt(segundos_f % 3600);
    minutos = parseInt(segundos_f / 60);
    segundos = parseInt(segundos_f % 60);

    document.getElementById('dias').innerHTML = dias + ':';
    document.getElementById('horas').innerHTML = horas + ':';
    document.getElementById('minutos').innerHTML = minutos + ':';
    document.getElementById('segundos').innerHTML = segundos;

},1000);