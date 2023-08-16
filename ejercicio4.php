<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <!--
        Determinar si un alumno aprueba o reprueba, ingresando las 3 notas.
        Aprueba si el promedio de las notas es mayor o igual a 7.
    -->
    <form action="" method="post">
        <h1>Promedio de Notas</h1>
        <label for="">Nota 1</label>
        <input type="number" step="any" name="nota1"><br><br>
        <label for="">Nota 2</label>
        <input type="number" step="any" name="nota2"><br><br>
        <label for="">Nota 3</label>
        <input type="number" step="any" name="nota3"><br><br>
        <input type="submit" value="Calcular Promedio" name="calcular">
    </form>
    <br><br>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nota1 = validarCampo($_POST["nota1"]);
            $nota2 = validarCampo($_POST["nota2"]);
            $nota3 = validarCampo($_POST["nota3"]);
            if(!empty($nota1) && !empty($nota2) && !empty($nota3)){
                if($nota1 > 10 || $nota2 > 10 || $nota3 > 10){
                    echo "Las notas no pueden ser mayores a 10 puntos.";
                }else{
                    $nota_final = (($nota1 + $nota2 + $nota3) / 3); 
                    if( $nota_final >= 7){
                    echo "Alumno APROBADO<br>Nota final: ".$nota_final;
                    }else{
                    echo "Alumno REPROBADO<br>Nota final: ".$nota_final;
                    }
                }
            }else{
                echo "Rellene todos los campos";
            }
        }

        function validarCampo($campo){
            $campo = trim($campo);
            $campo = stripslashes($campo);
            $campo = htmlspecialchars($campo);

            return $campo;
        }
    ?>
</body>
</html>