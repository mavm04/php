<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera web PHP</title>
</head>
<body>
    <?php
        //declaracion de variables
        $texto1 = "Juan";
        $texto2 = "Maria";
        $a = 8;
        $b = 10;
        
        //echo y concatenacion de texto y suma
        echo"<h1>Mi primera web php</h1>";
        echo"<p>".$texto1." y ".$texto2."</p>";
        echo"<p> El resultado de sumar ".$a." + ".$b." es igual a ".($a+$b)."</php>";
    ?>
    
    <h2><?php echo"Otro ejemplo.." ?></h2>
</body>
</html>