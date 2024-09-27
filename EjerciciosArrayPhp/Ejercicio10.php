<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Array numeros enteros.</h1>

    <?php 
        $array_enteros = [];
        const NUM_ENTEROS = 10;
        $media_pares = 0;
        $array_numeros_pares = [];
        // relleno el array y muestro los que son impares
        echo "<p>Numeros impares:</p>";
        for ($i=0; $i < NUM_ENTEROS; $i++) { 
            $array_enteros[$i] = $i;
            if ((($array_enteros[$i]%2) != 0) && ($array_enteros[$i] != 0)) {
                echo "<p> Impar: ".$array_enteros[$i]."</p>";
            }  else{
                $array_numeros_pares[] = $i;
            }
        }

        $suma_numeros_pares = 0;
        //hago la media de los valores pares del array y lo muestro
        for ($i=0; $i < count($array_numeros_pares); $i++) { 
            $suma_numeros_pares += $array_numeros_pares[$i];
        }
        echo "<br/>";
        echo "<p>Media de numeros pares: ".$suma_numeros_pares / count($array_numeros_pares)."</p>";

    ?>
</body>
</html>