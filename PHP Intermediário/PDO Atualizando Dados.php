<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $novasenha = md5("teste123");

    $sql = "UPTADE usuarios SET senha = '$novasenha' WHERE id = 1";
    $pdo->query($sql);
    echo "Conexão Estabelecida com sucesso";
} catch(PDOException $e){
    echo"Falhou: ".$e->getMessage();
}

?>