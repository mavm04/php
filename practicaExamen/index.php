<?php
function fecha_valida($texto)
{
    $año = substr($texto, 0, 4);
    $mes = substr($texto, 5, 2);
    $dia = substr($texto, 8, 2);
    return checkdate($mes, $dia, $año);
}

$fechaHoy = date('Y-m-d');
$diaSemanaTraducido = "";
$textoSemana = "";

// Obtener el día de la semana actual
$timestamp1 = strtotime($fechaHoy);
$diaSemana1 = date('l', $timestamp1);
$diasEnEspañol = [
    'Monday' => 'Lunes',
    'Tuesday' => 'Martes',
    'Wednesday' => 'Miércoles',
    'Thursday' => 'Jueves',
    'Friday' => 'Viernes',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo',
];
$diaSemanaTraducido1 = $diasEnEspañol[$diaSemana1];

// Meses en español
$mesesEnEspañol = [
    'January' => 'Enero',
    'February' => 'Febrero',
    'March' => 'Marzo',
    'April' => 'Abril',
    'May' => 'Mayo',
    'June' => 'Junio',
    'July' => 'Julio',
    'August' => 'Agosto',
    'September' => 'Septiembre',
    'October' => 'Octubre',
    'November' => 'Noviembre',
    'December' => 'Diciembre',
];

// Inicializar $textoSemana para mostrar la semana del día actual
$primerDiaSemana = date('Y-m-d', strtotime('monday this week', $timestamp1));
$ultimoDiaSemana = date('Y-m-d', strtotime('sunday this week', $timestamp1));

$numeroDiaLunes = date('j', strtotime($primerDiaSemana));
$numeroDiaDomingo = date('j', strtotime($ultimoDiaSemana));

$mesLunes = date('F', strtotime($primerDiaSemana));
$mesDomingo = date('F', strtotime($ultimoDiaSemana));

$mesLunesTraducido = $mesesEnEspañol[$mesLunes];
$mesDomingoTraducido = $mesesEnEspañol[$mesDomingo];

// Texto de la semana actual al cargar la página
$textoSemana = "Semana del $numeroDiaLunes de $mesLunesTraducido al $numeroDiaDomingo de $mesDomingoTraducido";

// Procesar el formulario
if (isset($_POST["btnEnviarFecha"]) && !empty($_POST['fecha'])) {
    $fecha = $_POST["fecha"];

    if (fecha_valida($fecha)) {
        $timestamp = strtotime($fecha);
        $diaSemana = date('l', $timestamp);
        $diaSemanaTraducido = $diasEnEspañol[$diaSemana];

        $primerDiaSemana = date('Y-m-d', strtotime('monday this week', $timestamp));
        $ultimoDiaSemana = date('Y-m-d', strtotime('sunday this week', $timestamp));

        $numeroDiaLunes = date('j', strtotime($primerDiaSemana));
        $numeroDiaDomingo = date('j', strtotime($ultimoDiaSemana));

        $mesLunes = date('F', strtotime($primerDiaSemana));
        $mesDomingo = date('F', strtotime($ultimoDiaSemana));

        $mesLunesTraducido = $mesesEnEspañol[$mesLunes];
        $mesDomingoTraducido = $mesesEnEspañol[$mesDomingo];

        $textoSemana = "Semana del $numeroDiaLunes de $mesLunesTraducido al $numeroDiaDomingo de $mesDomingoTraducido";
    } else {
        $diaSemanaTraducido = "Fecha no válida.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Aulas</title>
    <style>
        #titulo {
            text-align: center;
        }

        #contenedorPrincipal {
            background-color: lightblue;
            padding: 0.5em;
        }

        #formFecha {
            text-align: center;
        }
        #tablaHorario{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .tdHorarios{
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div id="contenedorPrincipal">
        <h1 id="titulo">Reserva de Aulas</h1><br>
        <form action="index.php" method="post" id="formFecha">
            <label for="fecha" id="diaSemana">
                <?php
                if (!empty($diaSemanaTraducido)) {
                    echo $diaSemanaTraducido;
                } else {
                    echo $diaSemanaTraducido1;
                }
                ?>
            </label>
            <input type="date" name="fecha" id="fechaForm" value="<?php
                if (isset($fecha)) {
                    echo $fecha;
                } else {
                    echo $fechaHoy;
                }
            ?>">
            <br><br>
            <label for="semana" id="semana"><?php echo $textoSemana; ?></label><br><br>
            <button type="submit" value="guardarCambios" name="btnEnviarFecha">Guardar Cambios</button>
        
            <?php
                $arrHoras = ["08:15 - 09:15","09:15 - 10:15","10:15 - 11:15",
                "11:15 - 11:45","11:45 - 12:45","12:45 - 13:45","13:45 - 14:45"];

                echo "<table id='tablaHorario'>";
                $cont = 0;
                foreach ($arrHoras as $hora) {
                    echo "<tr>";
                    echo "<td class='tdHorarios'>$hora</td>";
                    for ($i=0; $i <= 5; $i++) { 
                        if ($hora == '11:15 - 11:45' && $cont < 2) {
                            echo "<td class='tdHorarios' colspan='5'>Recreo</td>";
                            $cont++;
                        } else{
                            echo "<td class='tdHorarios'></td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </form>
    </div>
</body>
</html>