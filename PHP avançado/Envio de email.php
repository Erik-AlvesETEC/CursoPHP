<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "erikalvesprincipal@gmail.com";
    $assunto = "Pergunta do Contato";
    $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
    $cabecalho = "From: suporte@b7web.com.br"."\r\n".
                "Replay-To: ".$email."\r\n".
                "X-Mailer: PHP/".phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    echo"Email enviado com sucesso!</h2>";
    exit;

}
?>
<form method="POST">

    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>

    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>

    Mensagem:<br/>
    <textarea name="msg"></textarea><br/><br/>

    <input type="submit" value="Enviar" />

</form>