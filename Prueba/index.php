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
        $a = 2;
        $b = 10;
        
        //echo y concatenacion de texto y suma
        echo"<h1>Mi primera web php</h1>";
        echo"<p>".$texto1." y ".$texto2."</p>";
        echo"<p> El resultado de sumar ".$a." + ".$b." es igual a ".($a+$b)."</php>";
        
        //condiciones 'if/else' '&&' '||' para una sola sentencia, no hacen falta llaves
        if (isset($p) && 5==5){
            $c=$p+$a;
        } else{
            $c=15;
        }
        echo"<p>".$c."</p>";

        //switch
        switch ($a){
            case 1:
                break;
            case 2:
                break;
        }

        //funcion For. Despues de un blucle la i sigue existiendo con el valor con el que se salio del bucle.
        for ($i=0; $i < 5; $i++) { 
            echo "<p> (for)El valor de i es: ".$i."</p>";
        }

        echo "<p> despues del bucle for la i vale: ".$i."</p>";

        $i=0;
        while ($i < 5) {

            echo "<p> (while)El valor de i es: ".$i."</p>";
            $i++;
        }
    ?>
    
    <h2><?php echo"Otro ejemplo.." ?></h2>
</body>
</html>