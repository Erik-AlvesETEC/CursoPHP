<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
    echo "área restrita...";
} else{
    header("Location: Exemplo login.php");
}


?>