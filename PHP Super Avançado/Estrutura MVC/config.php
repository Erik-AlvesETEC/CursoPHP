<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'developer') {
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'Erik Alves';
    $config['dbpass'] = '99674';
}else {
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'Erik Alves';
    $config['dbpass'] = '99674';
}

global $db;
try {
    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],
     $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>