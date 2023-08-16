<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <!--
        Hacer un programa que calcule el total a pagar por la compra de camisas
        Si se compran 3 camisas o más se aplica el descuento del 20% sobre el total
        de la compra y si son menos de tres camisas un descuento del 10%    
    --->
    <h1>Ejercicio Operador Ternario</h1>
    <form action="" method="POST">
        <label for="cantidad">Cantidad de Camisas</label>
        <input type="number" name="cantidad" id="cantidad"><br><br>
        <input type="submit" value="Calcular">
        <br><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = $_POST["cantidad"];
            if (!empty($cantidad)) {
                $subtotal = 8.50 * $cantidad;
                ($cantidad >= 3) ?
                    $total = $subtotal - ($subtotal * 0.20) // <---TRUE
                    :
                    $total = $subtotal - ($subtotal * 0.10); // <---FALSE
                echo "El total a pagar es: $" . $total;
            }else{
                echo "Debes ingresar una cantidad";
            }
        }
        ?>
    </form>
</body>

</html>