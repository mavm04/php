<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    <?php 
        $ciudad['Madrid'] = ['Pedro', '32', '91-999.99.99'];
        $ciudad['Barcelona'] = ['Susana', '34','93-000.00.00'];
        $ciudad['Toledo'] = ['Sonia','42','925-09.09.09'];

        foreach ($ciudad as $nomCiudad => $amigo) {
            echo "<h2>".$nomCiudad."</h2>";
            echo "<ul>";
            foreach ($amigo as $nomDato => $dato) {
                echo "".$dato."<br/>";
            };
            echo "</ul>";
        }
    ?>
</body>
</html>