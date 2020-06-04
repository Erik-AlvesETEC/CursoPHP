<?php

$filename = "imagem.png";

$altura = 200;
$largura = 200;

list($largura_original, $altura_original) = getimagesize($filename);

$ratio = $largura_original / $altura_original;

if($largura/$altura > $ratio){
    $largura = $altura * $ratio;
} else{
    $altura = $largura / $ratio;
}

$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefrompng($arquivo);

imagecopyresampled($imagem_final, $imagem_original,
                    0, 0, 0, 0,
                    $largura, $altura, $largura_original, $altura_original);


imagepng($imagem_final, "mini_imagem.png");

echo "Imagem redimensionada com sucesso!"

?>