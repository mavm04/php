<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>
    <h1>Ciudades</h1>
    <?php
        $ciudades[] = "Madrid";
        $ciudades[] = "Barcelona";
        $ciudades[] = "Londres";    
        $ciudades[] = "New York";
        $ciudades[] = "Los Angeles";
        $ciudades[] = "Chicago";

        for ($i=0; $i < count($ciudades); $i++) { 
            echo "<p>La ciudad con el indice ".$i." tiene el nombre de ".$ciudades[$i].".</p>";
        }
    ?>
</body>
</html>