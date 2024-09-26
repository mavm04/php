<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Repite el ej anterior pero con indices</h1>
    <?php 
        $ciudades['MD'] = "Madrid";
        $ciudades['BC'] = "Barcelona";
        $ciudades['LD'] = "Londres";    
        $ciudades['NY'] = "New York";
        $ciudades['LA'] = "Los Angeles";
        $ciudades['CG'] = "Chicago";

        foreach ($ciudades as $key => $ciudad) {
            echo"<p>La ciudad con el indice ". $key ." tiene el nombre de ". $ciudad .".</p>";
        }
    ?>
</body>
</html>