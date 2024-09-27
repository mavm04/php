<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $lenguaje_cliente['CA'] = 'JavaScript';
        $lenguaje_cliente['CB'] = 'Html';
        $lenguaje_cliente['CC'] = 'Css';

        $lenguaje_servidor['SA'] = 'Php';
        $lenguaje_servidor['SB'] = 'Java';
        $lenguaje_servidor['SC'] = 'C++';
        
        $lenguajes[] = array_merge($lenguaje_cliente, $lenguaje_servidor);

        print_r($lenguajes);
    ?>
</body>
</html>