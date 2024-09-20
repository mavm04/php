<?php
    if (!isset($_POST["btnEnviar"])) {
        header("Location:index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>

<body>
    <h1>Recogida de los Datos</h1>

    <?php
        echo "<p>Nombre: <strong>" . $_POST["nombre"] . "</strong></p>";
        echo "<p>Apellido: <strong>" . $_POST["apellido"] . "</strong></p>";
        echo "<p>Contraseña: <strong>" . $_POST["contraseña"] . "</strong></p>";
        echo "<p>Dni: <strong>" . $_POST["dni"] . "</strong></p>";

        echo "<p>Sexo:</p>";
        if (isset($_POST["sex"])) {
            echo "<strong>" . $_POST["sex"] . "</strong>";
        }

        echo "<p>Ciudad: <strong>" . $_POST["ciudad"] . "</strong></p>";
        echo "<p>Comentarios: <strong>" . $_POST["comentarios"] . "</strong></p>";

        if (isset($_POST["suscribirse"])) {
            echo "<p>Suscrito: <strong> Si </strong></p>";
        } else {
            echo "<p>Suscrito: <strong> No </strong></p>";
        }
    ?>


</body>

</html>