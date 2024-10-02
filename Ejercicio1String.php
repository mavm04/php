<?php 
    if(isset($_POST['btnComparar'])){
        $error_primera = $_POST['primeraPalabra'] == "";
        $error_segunda = $_POST['segundaPalabra'] == "";
        $errores_form = $error_primera || $error_segunda;
    }
    
    if (isset($_POST['btnComparar']) && !$errores_form) {
        $primeraPalabra = $_POST['primeraPalabra'];
        $segundaPalabra = $_POST['segundaPalabra'];

        $arrPrimeraPalabra = str_split($primeraPalabra);
        $arrSegundaPalabra = str_split($segundaPalabra);

        $arr3letras1[] = $arrPrimeraPalabra[count($arrPrimeraPalabra)-3];
        $arr3letras1[] = $arrPrimeraPalabra[count($arrPrimeraPalabra)-2];
        $arr3letras1[] = $arrPrimeraPalabra[count($arrPrimeraPalabra)-1];

        $arr3letras2[] = $arrSegundaPalabra[count($arrSegundaPalabra)-3];
        $arr3letras2[] = $arrSegundaPalabra[count($arrSegundaPalabra)-2];
        $arr3letras2[] = $arrSegundaPalabra[count($arrSegundaPalabra)-1];

        $resultado = "";

        if (($arr3letras1[2] == $arr3letras2[2]) 
            && ($arr3letras1[1] == $arr3letras2[1])
            && ($arr3letras1[0] == $arr3letras2[0])) {

                $resultado = $primeraPalabra." y ".$segundaPalabra." riman.";

        } else if(($arr3letras1[2] == $arr3letras2[2]) 
                && ($arr3letras1[1] == $arr3letras2[1])) {

                    $resultado = $primeraPalabra." y ".$segundaPalabra." riman un poco.";

        } else{$resultado = $primeraPalabra." y ".$segundaPalabra." no riman.";};
    };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #divRipios {
            background-color: lightblue;
            border: 1px solid black;
        }
        #divRipios2 {
            background-color: lightgreen;
            border: 1px solid black;
            margin-top: 1em;
        }
        .h1Cent {
            text-align: center;
        }
        #formRipios {
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
        <h1 class="h1Cent">Ripios - Formulario</h1>
        <p id="pTitulo">Dime dos palabras y te dire si riman o no.</p>
        <form action="index.php" method="post" id="formRipios"  enctype="multipart/form-data">
            <label for="primeraPalabra">Primera palabra: </label>
            <input name="primeraPalabra" type="text" id="primeraPalabra"  value="<?php if(isset($_POST['primeraPalabra']) && $errores_form) {echo $_POST['primeraPalabra'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_primera){
                    echo "<span class='error'> * Campo Vacío *</span>";
                }
            ?>
            <br><br>
            <label for="segundaPalabra">Segunda palabra: </label>
            <input name="segundaPalabra" type="text" id="segundaPalabra" value="<?php if(isset($_POST['segundaPalabra']) && $errores_form) {echo $_POST['segundaPalabra'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_segunda){
                    echo "<span class='error'>* Campo Vacío *</span>";
                }
            ?>
            <br><br>
            <button name="btnComparar">Comparar</button>
        </form>
    </div>
    <div id="divRipios2">
        <h1 class="h1Cent">Ripios - Resultado</h1>
        <?php 
            if(isset($_POST['btnComparar']) && !$errores_form){
                echo "<p id='resultado'>".$resultado."</p>";
            }
        ?>
    </div>
    <div>
</body>
</html>
