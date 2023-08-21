<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="" method="post">
        <h1>Ejercicio Estructura Switch Case</h1>
        <label for="">Numero de día </label>
        <input type="number" name="dia" id="dia">
        <input type="submit" value="Enviar" name="enviar">
        <br><br>
        <?php
            function ejercicio9(){
                if(isset($_POST["dia"])){
                    $dia = $_POST["dia"];
                    switch ($dia) {
                        case 1:
                            echo "Lunes";
                            break;
                        case 2:
                            echo "Martes";
                            break;    
                        case 3:
                            echo "Miercoles";
                            break;
                        case 4:
                            echo "Jueves";
                            break;
                        case 5:
                            echo "Viernes";
                            break;
                        case 6:
                            echo "Sábado";
                            break;
                        case 7:
                            echo "Domingo";
                            break;
                        default:
                            echo "Día no valido";       
                    }
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])){
                ejercicio9();
            }
        ?>

    </form>

    
</body>
</html>