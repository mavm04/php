<?php
//si esta en el array te devuelve true, sino false
function mi_in_array($elemento, $array)
{
    $esta = false;
    for ($i = 0; $i < count($array); $i++) {
        if ($elemento[$i] == $array[$i]) {
            $esta = true;
            break;
        }
    }
}
if (isset($_POST["btnEnviar"])) {
    $error_nombre = $_POST["nombre"] == "";
    $error_sexo = !isset($_POST["sexo"]);
    $error_form = $error_nombre || $error_sexo;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pract_1c</title>
</head>

<body>
    <?php
    if (isset($_POST["btnEnviar"]) && !$error_form) {
        require "vista/vista_recogida.php";
    } else {
        require "vistas/vista_formulario.php";
    }
    ?>



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