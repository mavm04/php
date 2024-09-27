<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Array Push</h1><br>

    <?php
        $arr1 = array("Lagartija","Araña","Perro","Gato","Raton");
        $arr2 = array("12","34","45","52","12");
        $arr3 = array("Sauce","Pino","Naranjo","Chopo","Perro","34");
        
        foreach ($arr2 as $valor) {
            array_push($arr1, $valor);
        }

        foreach ($arr3 as $valor) {
            array_push($arr1, $valor);
        }

        print_r($arr1);
    ?>
</body>
</html>