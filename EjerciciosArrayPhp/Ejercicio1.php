<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Los 10 primeros números pares.</h1>
    <?php
        const N_PARES = 10;

        for ($i=0; $i < N_PARES; $i++) { 
            $pares[] = $i*2;
        }

        for ($i=0; $i < N_PARES; $i++) { 
            echo "<p>". $pares[$i] ."</p>";
        }
    ?>
</body>
</html>