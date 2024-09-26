<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Array nombres.</h1>

    <?php 
        $persona[] = "Pedro";
        $persona[] = "Ismael";
        $persona[] = "Sonia";
        $persona[] = "Clara";
        $persona[] = "Susana";
        $persona[] = "Alfonso";
        $persona[] = "Teresa";
        
        echo "<ul>";
        for ($i=0; $i < count($persona); $i++) { 
            echo "<li>".$persona[$i]."</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>