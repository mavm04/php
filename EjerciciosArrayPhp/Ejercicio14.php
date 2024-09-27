<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
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
    <h1>Tabla equipos y estadios</h1>
    <?php
    $estadios_futbol['Barcelona'] = 'Camp Nou';
    $estadios_futbol['Real Madrid'] = 'Santigo Bernabeu';
    $estadios_futbol['Valencia'] = 'Mestalla';
    $estadios_futbol['Real Sociedad'] = 'Anoeta';

    echo "<table>";
    foreach ($estadios_futbol as $equipo => $estadio) {
        echo "<tr>";
        echo "<td>" . $equipo . "</td>";
        echo "<td>" . $estadio . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>