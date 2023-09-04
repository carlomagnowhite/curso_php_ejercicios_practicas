<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes html</title>
</head>
<body>
    <h1>Componentes</h1>    

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="ingles">Inglés</option>
            <option value="matematicas">Matemáticas</option>
            <option value="ciencia">Ciencias</option>
            <option value="lenguaje">Lenguaje</option>
        </select>
        <br><br><br>
        <!--CHECKBOX MULTIPLE START-->
        <label for="op1">
            <input type="checkbox" name="marcas[]" id="op1" value="Samsung">
                Samsung
            </input>
        </label>
        <label for="op2">
            <input type="checkbox" name="marcas[]" id="op2" value="Apple">
                Apple
            </input>
        </label>
        <label for="op3">
            <input type="checkbox" name="marcas[]" id="op3" value="Xiaomi">
                Xiaomi
            </input>
        </label>
        <label for="op4">
            <input type="checkbox" name="marcas[]" id="op4" value="Oneplus">
                Oneplus
            </input>
        </label>
        <!--CHECKBOX MULTIPLE END-->
        <br><br>
        <input type="submit" name="" id="">
        <br><br>
    </form>
    
    <?php
        if(isset($_POST["asignatura"]) && isset($_POST["marcas"])){
            $asignaturas = $_POST["asignatura"];
            $marcas = $_POST["marcas"];
            foreach($asignaturas as $asignatura){
                echo $asignatura."<br>";
            }
            echo"<br><br><br>";
            foreach($marcas as $marca){
                echo $marca."<br>";
            }
        }

        
    ?>

    

</body>
</html>