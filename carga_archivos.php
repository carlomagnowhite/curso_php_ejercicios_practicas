<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!file_exists("archivos")){
                if(!mkdir("archivos",0777)){
                    echo "Error al crear el directorio";
                    exit();
                }
            }
            chmod("archivos",0777);

            if($_FILES["archivo"]["size"]/1024 > 2048 ){
                echo "Solo se admite archivos máximo de 2MB";
            }else{
                if (move_uploaded_file($_FILES["archivo"]["tmp_name"],"archivos/".$_FILES["archivo"]["name"])) {
                    echo "Archivo subido con éxito";
                }else{
                    echo "Error al subir el archivo!";
                }
            }
        }
?>r