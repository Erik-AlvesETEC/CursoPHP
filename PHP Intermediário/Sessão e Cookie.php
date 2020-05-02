<?php
session_start();

$_SESSION["teste"] = array(
    "adsmflgçkmdaslfkglmgkp"
);

echo"Meu nome é: ".$_SESSION["teste"];

?>

<?php

setcookie("meuteste", "Fulado de tal", time()+3600);

?>

<?php

echo"Meu nome é: ".$_COOKIE["meuteste"];

?>