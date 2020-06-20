<meta charset="UTF-8">
<h1>Vetor com a soma dos números</h1>

<?php
    $n = array(1,2,3,4,5,6,7,8,9,10);
    $soma = 0;
        foreach($n as $valor){

            $soma = $soma + $valor;

            if($valor == 10){
            echo "".$soma."<br>";
            }
            else{

            }
        }
?>
<button><a href = "index.php">Voltar para os Exercícios</a></button><br>