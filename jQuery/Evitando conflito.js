var $j = jQuery.noConflict(); // evita conflito com prototype por exemplo, que ambos usando $ no começo e por aí vai

$j(document).ready(function(){
    alert("Está funcionando....");
});