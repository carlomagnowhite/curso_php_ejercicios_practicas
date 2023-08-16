<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <form action="" method="post">
        <h1>Ejercicio 7 IF-ELSEIF</h1>
        <label for="">Cantidad de computadoras</label>
        <input type="number" name="cantidad" id="cantidad">
        <input type="submit" value="Calcular">
        <br><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = $_POST["cantidad"];
            if (!empty($cantidad)) {
                if ($cantidad > 0) {
                    $subtotal = $cantidad * 700;
                    if ($cantidad < 5) {
                        $total = $subtotal - ($subtotal * 0.10);
                    } else if ($cantidad >= 5 && $cantidad < 10) {
                        $total = $subtotal - ($subtotal * 0.20);
                    } else if ($cantidad >= 10) {
                        $total = $subtotal - ($subtotal * 0.40);
                    }
                    echo "Valor final de la compra: $" . $total;
                }else{
                    echo "Cantidad NO válida";
                }
            } else {
                echo "Debes ingresar una cantidad";
            }
        }
        ?>
    </form>
</body>

</html>