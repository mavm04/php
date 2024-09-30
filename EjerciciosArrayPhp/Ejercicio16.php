<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr['5'] = 1;
        $arr['12'] = 2;
        $arr['13'] = 36;
        $arr['x'] = 42;

        echo "<p>Numero de elementos del array: ".count( $arr)."</p>";
        print_r( $arr );
        echo "<br/>";

        unset($arr['5']);
        echo "<p>Array borrando el indice '5'<p/>";
        print_r( $arr );
    ?>
</body>
</html>