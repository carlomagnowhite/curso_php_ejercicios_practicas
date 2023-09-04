<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Log In</h1>
    <form action="login.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name = "usuario" id = "usuario" <!--pattern="[a-zA-Z]{4,10}" maxlength="10"--->
        <br><br>
        <label for="">Password </label>
        <input type="password" name = "clave" id = "clave">
        <br><br>
        <input type="submit" value="Ingresar" name="ingresar">
    </form>

    
</body>
</html>