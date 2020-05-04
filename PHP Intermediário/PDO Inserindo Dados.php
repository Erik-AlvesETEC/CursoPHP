<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Testador";
    $email = "teste@hotmail.com";
    $senha = md5("123");

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);

    echo"Usuário inserido com sucesso";
    echo "Conexão Estabelecida com sucesso";
} catch(PDOException $e){
    echo"Falhou: ".$e->getMessage();
}

?>