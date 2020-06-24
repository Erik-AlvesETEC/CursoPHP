$( document ).ready(function(){ // uma forma
    alert("Opa, tudo bem?");
});

$(function(){       // segunda forma
    alert("eai");
});

function tudoPronto(){
    alert("Tudo pronto!");
}
$(document).ready(tudoPronto); // terceira forma