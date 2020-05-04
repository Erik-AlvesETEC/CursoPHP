<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $novasenha = md5("teste123");

    $sql = "DELETE FROM usuarios WHERE id = 12";
    $pdo->query($sql);
    echo "Usuário deletado com sucesso";
} catch(PDOException $e){
    echo"Falhou: ".$e->getMessage();
}

?>