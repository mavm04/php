<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Peliculas que se han visto.</h1>

    <?php 
        $peliculasMes['enero'] = 9;
        $peliculasMes['febrero'] = 12;
        $peliculasMes['marzo'] = 0;
        $peliculasMes['abril'] = 17;

        foreach ($peliculasMes as $mes => $numPeliculas) {
            if ($numPeliculas > 0) {
                echo "<p>".$mes." : ".$numPeliculas."</p>";
            }
        }
    ?>
</body>
</html>