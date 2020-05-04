<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    echo "Conexão Estabelecida com sucesso";
} catch(PDOException $e){
    echo"Falhou: ".$e->getMessage();
}

?>