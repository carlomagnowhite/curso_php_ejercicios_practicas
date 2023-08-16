<!--
    Realizar un programa en donde se pide la edad y nombre del usuario
    si es mayor de edad debe aparecer un mensaje indicandolo.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Ejercicio 1</h1>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">
        <label for="">Edad</label>
        <input type="number" name="edad" id=""><br><br>
        <input type="submit" value="Enviar" name = "enviar">

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombre = $_POST["nombre"];
                $edad  = $_POST["edad"];
                if($edad >= 18){
                    echo "Hola $nombre, eres mayor de edad.";
                }else{
                    echo "Eres menor de edad, NO puedes acceder.";
                }
            }
        ?>
    </form>
</body>
</html>