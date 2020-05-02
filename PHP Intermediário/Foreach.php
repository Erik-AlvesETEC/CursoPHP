<?php

$nomes = array(
    array("nome"=>"Erik", "idade"=>17),
    array("nome"=>"Henrique", "idade"=>11),
    array("nome"=>"Alves", "idade"=>16),
    array("nome"=>"PHP", "idade"=>12)

);

foreach($nomes as $aluno){
echo"Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."<br/>";
}



?>