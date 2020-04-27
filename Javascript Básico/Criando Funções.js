function trocarDiv(nome, idade) {
    var area = document.getElementsById("area");
    var texto = prompt("Qual o sobrenome?");

    area.innerHTML = nome+" "+texto+" tem "+idade+" anos";
}