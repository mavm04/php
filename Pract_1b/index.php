<?php
    if (isset($_POST["btnEnviar"])) {
        $error_nombre=($_POST["nombre"]=="");
        $error_apellido=($_POST["apellido"]=="");
        $error_contraseña=($_POST["contraseña"]=="");
        $error_dni=($_POST["dni"]=="");
        $error_sexo=!isset($_POST["sexo"]);
        $error_comentarios=($_POST["comentarios"]=="");
        $error_form=$error_nombre||$error_apellido||$error_contraseña||$error_dni||$error_sexo||$error_comentarios;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
        if (isset($_POST["btnEnviar"]) && !$error_form) {
            require "vistas/vistaRecogida.php";
        } else {
            require "vistas/vistaFormulario.php";
        }
    ?>
</body>
</html>