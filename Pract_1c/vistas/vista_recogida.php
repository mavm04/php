<?php
    echo "<p>Nombre: <strong>" . $_POST["nombre"] . "</strong></p>";
    echo "<p>Nacido en: <strong>" . $_POST["nacido"] . "</strong></p>";
    echo "<p>Sexo:</p>";
    if (isset($_POST["sexo"])) {
        echo "<strong>" . ($_POST["sexo"]) . "</strong>";
    }
    echo "<br/>";
    echo "<p>Aficiones:</p>";
    foreach ($_POST["aficiones"] as $key => $value) {
            echo "<p><strong>" .($key+1). " : ".$value."</strong></p>";
    }   
    echo "<p>Comentarios: <strong>".$_POST["comentarios"]."</strong></p>";