<?php
    session_name("ses");    
    session_start();

    #se finaliza la sesión actual y se destruye todas las variables de sesión
    session_destroy();

    if(headers_sent()){
        echo "<script> window.location.href='index.php' </script>"; 
    }else{
        header("Location: index.php");
    }
?>