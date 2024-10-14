<?php
    function tiene_extension($texto){
        $array_nombre = explode(".", $texto);
        if (count($array_nombre) <= 1) {
            $respuesta = false;
        }else{
            $respuesta = end($array_nombre);
        }

        return $respuesta;
    }

    // requerido
    if (isset($_POST["brnEnviar"])) {
        $error_foto = $_FILES["foto"]['error'] 
            || !tiene_extension($_FILES['foto']['name'])
            || !getimagesize($_FILES['foto']['tmp_name']
            || $_FILES['foto']['size'] > 500*1024);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria Subir Ficheros</title>
    <style>
        .error{color:red;}
        p img{
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>Teoria subir ficheros</h1>
    <form action="index_req.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="foto">Seleccione un archivo imagen (Max 500KB):</label>
            <input type="file" name="foto" id="foto" accept="image/*">
            <?php
                if (isset($_POST['btnEnviar']) && $error_foto) {
                    if ($_FILES['foto']['name']=="") {
                        echo "<span class='error'>*Debes seleccionar un fichero*</span>";
                    } elseif ($_FILES['foto']['error']) {
                        echo "<span class='error'>*No se ha subido al servidor*</span>";
                    } elseif(!tiene_extension($_FILES['foto']['name'])){
                        echo "<span class='error'>*has seleccionado un fichero sin extension*</span>";
                    } elseif(!getimagesize($_FILES['foto']['tmp_name'])){
                        echo "<span class='error'>*No has seleccionado una imagen*</span>";
                    } else{
                        echo "<span class='error'>*El fichero seleccionado es mayor de 500KB*</span>";
                    }
                }
            ?>
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>

    <?php
        if (isset($_POST["btnEnviar"]) && !$error_foto) {

            echo"<h1>Informacion de la imagen</h1>";

            $numero_unico = md5(uniqid(uniqid(), true));
            $ext = tiene_extension($_FILES["foto"]["name"]);
            $nombre_imagen = "img_".$numero_unico.".".$ext;

            @$var = move_uploaded_file($_FILES["foto"]["tmp_name"], "images/".$nombre_imagen);
            
            if (!$var) {
                echo "<p>No se ha podido mover la imagen a la carpeta destino en el servidor</p>";  
            }else{
                echo "<p><strong>Nombre Original: </strong>".$_FILES['foto']['name']."/p>";
                echo "<p><strong>Tipo: </strong>".$_FILES['foto']['type']."</p>";
                echo "<p><strong>Tamaño: </strong>".$_FILES['foto']['size']."</p>";
                echo "<p><strong>Archivo subido temporalmente: ".$_FILES['foto']['tmp_name']."</p>";
                echo "<p><img src='images/".$nombre_imagen."' alt='Imagen Subida' title='Imagen'></p>";
            }

        }
    ?>
</body>
</html>