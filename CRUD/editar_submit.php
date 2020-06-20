<?php
include 'contato.class.php';
$contato = new Contato;

if(empty($_POST['id'])){
    $nome = $_POST['nome'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    if(empty($email)){

    $contato->editar($nome, $email, $id);
}
    header("Location: index.php");
}


?>