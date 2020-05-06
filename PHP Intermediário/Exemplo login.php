<?php
session_start();

if(isset($_SESSION['email']) && empty($_SESSION['email']) == false){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $dsn = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";

    try {
        $db = new PDO($dsn, $dbuser, $dbpass);

        $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha '$senha'");

        if($sql->rowCount() > 0) {

            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];

            header("Location: Exemplo Sistema de Login.php");
        }
    }catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();
    }
}

?>
Pagina de login
<form method="POST">

    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>

    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>

    <input type="submit" value="Entrar" />
</form>