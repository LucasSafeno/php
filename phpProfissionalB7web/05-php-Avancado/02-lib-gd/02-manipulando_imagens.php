<?php 
    $image = "imagem.jpg";

    list($largura_original, $latura_original) = getimagesize($image);
    list($largura_mini, $altura_mini) = getimagesize("php.png");
    $imagem_final = imagecreatetruecolor($largura_original, $latura_original);

    $imagem_original = imagecreatefromjpeg("imagem.jpg");
    $imagem_mini = imagecreatefrompng("php.png");

    imagecopy($imagem_final,$imagem_original,
            0, 0,
            0, 0,
            $largura_original, $latura_original);
    
    imagecopy($imagem_final, $imagem_mini,
              1360, 650,
              0, 0,
              $largura_mini, $altura_mini);

            header("Content-Type: image/jpg");
            imagejpeg($imagem_final, null, 100);


?>