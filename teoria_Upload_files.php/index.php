<?php
    if (isset($_FILES["foto"]) && $_FILES["foto"]['error']==0) {
        echo "has seleccionado un archivo.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria Subir Ficheros</title>
</head>
<body>
    <h1>Teoria subir ficheros</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="foto">Seleccione un archivo imagen (Max 500KB):</label>
            <input type="file" name="foto" id="foto" accept="image/*">
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>
</body>
</html>