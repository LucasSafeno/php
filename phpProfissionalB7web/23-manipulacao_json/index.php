<?php 
$token = "d037f94d89c41636265773d77ce85018";
$cidade = "jaboatao dos guararapes";
$json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$cidade."&appid=".$token."&lang=pt_br");

$json = json_decode($json);

echo "<pre>";
print_r($json);
echo "</pre>";


    echo "<b>Cidade : </b>".$json->name;
    echo "<br>";
    foreach($json->weather as $item){
        echo $
    }



?>