<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
        if (!empty($_POST["usuario"]) && !empty($_POST["clave"])) {
            if (!preg_match("/^[a-zA-Z]{4,10}$/", $_POST["usuario"])) {
                echo "Datos erroneos";
                exit();
            } else {
                if ($_POST["usuario"] == "matcris" && $_POST["clave"] == "1234") {
                    session_name("ses");
                    session_start();
                    $_SESSION["Nombre"] = "Mateo";
                    $_SESSION["Apellido"] = "Diaz";
                    $_SESSION["Pais"] = "Ecuador";
                    if (headers_sent()) {
                        echo "<script> window.location.href='main.php' </script>";
                    } else {
                        header("Location: main.php");
                    }
                } else {
                    echo "<script> window.location.href='index.php' </script>";
                }
            }
        }
    }
}
