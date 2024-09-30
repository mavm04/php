<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php 
        $deportes = array('futbol', 'baloncesto', 'natacion', 'tenis');
        
        echo "<p>Total de valores: ".count($deportes)."</p>";
        echo "<p>Primer puntero del array: ".$deportes[0]."</p>";
        echo "<p>Segundo puntero del array: ".$deportes[1]."</p>";
        echo "<p>Segundo puntero del array: ".$deportes[3]."</p>";
        echo "<p>Segundo puntero del array: ".$deportes[2]."</p>";
    ?>
</body>
</html>