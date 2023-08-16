<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <!--
        Calcular el total que una persona debe pagar en una llantera,
        el precio de cada llanta es de 800$ si se compran menos de 5 llantas
        y de 700$ si se compran 5 o mas.
    -->
    <form action="" method="post">
        <h1>Ejercicio 3</h1>
        <label for="">Cantidad de llantas </label>
        <input type="number" name = "cantidad">
        <input type="submit" name = "calcular" value = "Calcular"><br><br>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $cantidad = $_POST["cantidad"];
                if($cantidad >= 5){
                    echo "Valor total: $".($cantidad*700);
                }else{
                    echo "Valor total: $".($cantidad*800);
                }
            }
        ?>
    </form>
</body>
</html>