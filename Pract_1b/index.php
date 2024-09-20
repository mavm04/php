<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
        if (isset($_POST["btnEnviar"])) {
            require "vitas/vistaRecogida.php";
        } else {
            require "vitas/vistaFormulario.php";
        }
    ?>
</body>
</html>