<?php
    
    $clave = "maradona2013";

    echo md5($clave)."<br>";
    echo hash("md5",$clave)."<br>";

    foreach(hash_algos() as $algoritmos){
        echo $algoritmos."<br>";
    }

    
?>