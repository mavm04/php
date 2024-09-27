<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <style>
        table {
            border: #b2b2b2 1px solid;
            border-collapse: collapse;
        }

        td {
            border: #b2b2b2 1px solid;
        }
    </style>
</head>
<body>
    <h1>Ordenar array</h1>
    <?php
        $numeros['tres']=3;
        $numeros['dos']=2;
        $numeros['ocho']=8;
        $numeros['ciento_veintitres']=123;
        $numeros['cinco']=5;
        $numeros['uno']=1;

        asort($numeros);

        echo "<table>";
        foreach ($numeros as $key => $value) {
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$value."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>