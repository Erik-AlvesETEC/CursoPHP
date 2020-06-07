<?php
interface Animal {
    public function andar($x, $y);
}
class Cachorro implements Animal {
    public function andar() {
        echo "Estou andando...";
    }
}

$cachorro = new Cachorro();
$cachorro->andar();
?>