<?php 
    if (isset($_POST["btnEnviar"])) {
        $error_num = $_POST["numero"] == "" || !is_numeric(trim($_POST["numero"]))
            || $_POST['numero'] > 10 || $_POST['numero'] < 1;
    }

    if (isset($_POST['btnEnviar']) && !$error_num) {
        $numeroTabla = trim($_POST['numero']);
        $nomFichero = 'tabla_'.$numeroTabla.'.txt'; 
        $rutaCarpeta = 'Tablas/';
        $rutaFichero = $rutaCarpeta . $nomFichero; 

        if (!file_exists($rutaCarpeta)) {
            mkdir($rutaCarpeta, 0777, true);
        }

        if (!file_exists($rutaFichero)) {
            $fichero = fopen($rutaFichero, "w");
            for ($i = 1; $i <= 10; $i++) { 
                $linea = $numeroTabla." x ".$i." = ".($numeroTabla*$i).PHP_EOL;
                fwrite($fichero, $linea);
            }
            fclose($fichero);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        #errorNum {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 1 Ficheros</h1>
    
    <form action="index.php" method="post">
        <label for="numero">Introduce un número del 1 al 10:</label><br>
        <input type="text" name="numero" id="numero">
        <?php if (isset($_POST['btnEnviar']) && $error_num) {
            echo '<p id="errorNum">*Error: introduce un número válido*</p>';
        }?>
        <button type="submit" name="btnEnviar">Mostrar</button>

        <?php
            if (isset($_POST['btnEnviar']) && !$error_num) {
                echo '<h3>Tabla del '.$numeroTabla.'</h3>';

                $fichero = fopen($rutaFichero, "r");
                while (($linea = fgets($fichero)) != false) {
                    echo '<p>'.$linea.'</p>';
                }
                fclose($fichero); 
            }
        ?>
    </form>
</body>
</html>