
<?php
    $n = 20;
    # incrementos y decrementos
   /* do {
        echo $n."<br>";
        $n++;  
    } while ($n <= 20);

    do{
        echo $n."<br>";
        $n--;
    }while($n >= 1);
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO WHILE</title>
</head>
<body>
    <h1>Ejercicios do while</h1>
    <form action="" method="post">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
        <br><br>
        <?php
            if(isset($_POST["numero"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                $numero = $_POST["numero"];
                if(!empty($numero)){
                    $cont = 12;
                    do{
                        echo "$cont x $numero = ".($cont * $numero)."<br>"."";
                        $cont--;
                    }while($cont>=1);
                }else{
                    echo "Debes ingresar un numero";
                }
            }
        ?>
    </form>    
</body>
</html>
