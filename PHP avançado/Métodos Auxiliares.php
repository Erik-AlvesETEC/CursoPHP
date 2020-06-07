<?php
class Post {
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }
    public function addComentario($msg){
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }
    public function getQuantosComentarios(){
        return $this->qtComentarios;
    }
    public function contarComentarios(){
        $this->qtComentarios = count($this->comentarios);
    }
}


$post->addComentario("t1");
$post->addComentario("t2");
$post->addComentario("t3");

echo "Quantida de comentarios: ".$post->getQuantosComentarios();
?>