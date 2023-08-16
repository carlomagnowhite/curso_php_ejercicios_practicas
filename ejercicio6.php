<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6 - Estructura condicional if - elseif</h1>
    <form action="" method="POST">
        <label for="numerodia">Numero del día </label>
        <input type="number" name = "dia" id = "dia">
        <input type="submit" value="Enviar">
        <br><br>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $dia  = $_POST["dia"];
                $mensaje = "Dia de la semana: ";
                if(!empty($dia)){
                    if($dia == 1){
                        echo $mensaje."Domingo";
                    }else if($dia == 2){
                        echo $mensaje."Lunes";
                    }else if($dia == 3){
                        echo $mensaje."Martes";
                    }else if($dia == 4){
                        echo $mensaje."Miércoles";
                    }else if($dia == 5){
                        echo $mensaje."Jueves";
                    }else if($dia == 6){
                        echo $mensaje."Viernes";
                    }else if($dia == 7){
                        echo $mensaje."Sábado";
                    }else{
                        echo "Día NO válido";
                    }
                }else{
                    echo "Debes ingresar un número de dia";
                }
            }
        ?>
    </form>
</body>
</html>