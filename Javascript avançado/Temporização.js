function acao(){
    document.write("Executou...<br/>");
}
var timer = setInterval(acao, 2000);

setTimeout(acao, 2000);