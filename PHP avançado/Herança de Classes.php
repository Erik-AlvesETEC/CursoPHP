<?php

 class Animal {
    private $nome;
    private $idade;

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }
 }
 class Cavalo extends Animal {
    private $quantidade_de_patas;
    private $tipo_de_pelo;
 }

$cavalo = new Cavalo();

?>