<?php 
session_start();

if(!empty($_POST['n'])){
    $n = intval($_POST['n']);

    if($_SESSION['v'] == $n){
        echo "Humano";
    }else{
        echo "Fake";
    }
}else{
    header("Location: index.php");
}

?>