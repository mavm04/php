<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php
        $familias['Los Simpsons'] = ['Homer', 'Marge', 'Bart', 'Lisa', 'Maggie'];
        $familias['Los Griffin'] = ['Peter', 'Lois', 'Chris', 'Meg', 'Stewie'];
    
        foreach ($familias as $nomFamilia => $familia) {
            echo "<h2>".$nomFamilia."</h2>";
            echo "<ul>";
            foreach ($familia as $mienbro) {
                echo "".$mienbro."<br/>";
            };
            echo "</ul>";
        }
    ?>
</body>
</html>