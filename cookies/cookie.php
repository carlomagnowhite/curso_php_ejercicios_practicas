<?php
    setcookie("Idioma","es");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Cookies</title>
</head>
<body>
    <h1><?php echo $_COOKIE["Idioma"]; ?></h1>
</body>
</html>