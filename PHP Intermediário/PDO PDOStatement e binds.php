<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = 'Erik';
    $id = '5';

    $sql = "UPTADE usuarios SET nome = :novonome WHERE id = :id";

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();

} catch(PDOException $e){
    echo"Falhou: ".$e->getMessage();
}

?>