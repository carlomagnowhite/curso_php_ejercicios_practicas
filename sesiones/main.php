<?php
    session_name("ses");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion php</title>
</head>
<body>
    <?php echo "Hola ".$_SESSION["Nombre"]."\t".$_SESSION["Apellido"];?>
    <br><br>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>