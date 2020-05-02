<?php

$nome = "Bonieky Lacerda Leal";

$x = explode(" ", $nome);

print_r($x);

?>

<?php

$x = number_format(34536567574.12345365, 2, ",",".");

echo $x;

?>

<?php

$texto = "O rato roeu a roupa!";

$string = str_replace("roeu", "comeu", $texto);

echo $string;
?>
<?php

echo strtolower("BONIEKY LACERDA");

echo strtoupper("bonieky lacerda");

?>

<?php

$texto = "Erik";

$x = substr($texto, 0, 3);

echo $x;

?>
