<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <!--
        En un almacén se hace un 20% de descuento a los clientes 
        cuya compra supone los 100$ o mas. Cuál será la cantidad a pagar
        que un cliente tendrá que cancelar por su compra?.
    -->

    <form action="" method="POST">
        <h1>Ejercicio 2</h1>
        <label for="">Valor de la compra</label>
        <input type="number" step="any" name="valor" id="valor"><br><br>
        <input type="submit" name="calcular" value="Calcular"><br><br>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $valor = $_POST["valor"];
                if($valor >= 100){
                    $val_final = $valor - ($valor * 0.20);
                    echo "el valor final de la compra es ${val_final}";
                }else{
                    echo "no es posible aplicar el descuento";
                }
            }
        ?>
    </form>
</body>
</html>