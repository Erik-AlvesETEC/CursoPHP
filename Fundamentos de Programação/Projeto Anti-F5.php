<?php
if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);

    header("Location: Projeto Anti-F5");
}
?>
<form method="POST">
    <input type="text" name="nome" />
    <input type="submit" value="Enviar" />
</form>