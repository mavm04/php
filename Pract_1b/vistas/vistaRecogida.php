<?php
        echo "<h1>Recogida de los Datos</h1>";
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