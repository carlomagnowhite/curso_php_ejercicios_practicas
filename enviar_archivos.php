<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Archivos</title>
</head>
<body>
    
    <h1>Envio de archivos Formulario</h1>
    <form action="carga_archivos.php" method="POST" enctype="multipart/form-data" class="FormAjax">
        <input type="file" name="archivo" accept=".pdf">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <script src="ajax.js"></script>
</body>
</html>