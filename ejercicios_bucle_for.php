<?php
    /*
        ejercicio de impresion de una lista de numeros (incrementos y decrementos)
        usando el bucle for
    
    for($i = 20; $i > 0; $i--){
        echo "$i\t";
    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle for</title>
</head>
<body>
    <h1>Ejercicios bucle for</h1>
    <form action="" method="POST">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
        <br><br>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])){
                $numero = $_POST["numero"];
                if(!empty($numero)){
                    for($i = 12; $i >= 1; $i--){
                        echo "$i x $numero = ".($i*$numero)."<br>";
                    }
                }else{
                    echo "Debes ingresar un numero";
                }
            }

            
        ?>
    </form>
</body>
</html>