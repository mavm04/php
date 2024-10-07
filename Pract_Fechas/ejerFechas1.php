<?php 

    function buenos_separadoes($texto){
        return substr($texto,2,1) == "/" && substr($texto,5,1) == "/";
    }

    function buenos_numeros($texto){
        return is_numeric(substr($texto,0,2)) && is_numeric(substr($texto,3,2)) && is_numeric(substr($texto,6,4));
    }

    function fecha_valida($texto){
        return checkdate(substr($texto,3,2), substr($texto,0,2), substr($texto,6,4));
    }

    if(isset($_POST['btnComparar'])){
        $error_primera = $_POST['primeraFecha'] == "" || strlen($_POST['primeraFecha']) != 10 || !buenos_separadoes($_POST['primeraFecha']) || !buenos_numeros($_POST['primeraFecha']) || !fecha_valida($_POST['primeraFecha']);
        $error_segunda = $_POST['segundaFecha'] == "" || strlen($_POST['segundaFecha']) != 10 || !buenos_separadoes($_POST['segundaFecha']) || !buenos_numeros($_POST['segundaFecha']) || !fecha_valida($_POST['segundaFecha']);
        $errores_form = $error_primera || $error_segunda;
    }
    
    if (isset($_POST['btnComparar']) && !$errores_form) {
        $primeraFecha = $_POST['primeraFecha'];
        $segundaFecha = $_POST['segundaFecha'];

        
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Fechas</title>
    <style>
        #divRipios {
            background-color: lightblue;
            border: 1px solid black;
        }
        #divResultado {
            background-color: lightgreen;
            border: 1px solid black;
            margin-top: 1em;
        }
        .h1Cent {
            text-align: center;
        }
        #formFechas {
            margin: 1em;
        }
        #pTitulo {
            margin: 0.5em;
        }
        #resultado {
            padding-left: 1em;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div id="divRipios">
        <h1 class="h1Cent">Fechas</h1>
        <p id="pTitulo">Dime 2 fechas y te dire la diferencia en dias.</p>
        <form action="ejerFechas1.php" method="post" id="formFechas"  enctype="multipart/form-data">
            <label for="primeraFecha">Introduzca la primera fecha [DD/MM/AAAA]:</label>
            <input name="primeraFecha" type="text" id="primeraFecha"  value="<?php if(isset($_POST['primeraFecha']) && $errores_form) {echo $_POST['primeraFecha'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_primera){
                    echo "<span class='error'> *Campo Erroneo*</span>";
                }
            ?>
            <br><br>
            <label for="segundaFecha">Introduzca la segunda fecha [DD/MM/AAAA]: </label>
            <input name="segundaFecha" type="text" id="segundaFecha" value="<?php if(isset($_POST['segundaFecha']) && $errores_form) {echo $_POST['segundaFecha'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_segunda){
                    echo "<span class='error'>*Campo Erroneo*</span>";
                }
            ?>
            <br><br>
            <button name="btnComparar" type="submit">Comparar</button>
        </form>
    </div>
    <div id="divResultado">
        <h1 class="h1Cent">Resultado</h1>
        <?php 
            
        ?>
    </div>
    <div>
</body>
</html>