<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <!--
        Pida al usuario la edad y el genero, el programa indicará si el usuario
        ya puede jubilarse. Nota: Un hombre puede jubilarse si tiene 60 años o más
        Una mujer podrá jubilarse si tiene más de 54 años.
    -->
    <h1>Ejercicio 8 - if-elseif</h1>

    <form action="" method="get">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <label for="genero">Género</label>
        <select name="genero" id="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        <input type="submit" value="Enviar">
        <br><br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET["edad"]) && isset($_GET["genero"])) {
                    $edad = $_GET["edad"];
                    $genero = $_GET["genero"];
                    if (!empty($edad)) {
                        if ($genero == "masculino" && $edad >= 60) {
                            echo "Usuario Masculino puede jubilarse";
                        } else if ($genero == "femenino" && $edad >= 54) {
                            echo "Usuario Femenino puede jubilarse";
                        } else {
                            echo "El usuario no puede jubilarse todavía";
                        }
                    } else {
                        echo "Debes ingresar una edad";
                    }
                }
            }
        ?>
    </form>
</body>
</body>

</html>