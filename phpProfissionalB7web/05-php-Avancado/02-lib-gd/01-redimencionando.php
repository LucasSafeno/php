<?php 

$filename = "imagem.jpg";

// parametros maximos que irá ter
$largura = 200;
$altura = 200;

// pegar tamanho original 
list($largura_original, $altura_original) = getimagesize($filename);

//tamanho proporcional
$ratio = $largura_original / $altura_original;

if($largura/$altura  > $ratio){
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}
// echo "LARGURA ORIGINAL :".$largura_original." - ALTURA ORIGINAL : ".$altura_original."<br>";
// echo "LARGURA : ".$largura." - ALTURA : ". $altura;



// create image
    $imagem_final = imagecreatetruecolor($largura,$altura);

    // get image
    $imagem_original = imagecreatefromjpeg($filename);

    imagecopyresampled($imagem_final, $imagem_original,
    0, 0, 0, 0,
    $largura, $altura, $largura_original, $altura_original);


    // transforma o arquivo index em imagem
    // header("Content-Type: image/jpeg");
    imagejpeg($imagem_final, "mini-imagem.jpeg", 100);

    echo "Imagem redimencionada com sucesso";

?>