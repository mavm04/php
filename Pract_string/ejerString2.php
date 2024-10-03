<?php 
    if(isset($_POST['btnComparar'])){
        $error_primera = $_POST['palabra'] == "";
        $errores_form = $error_primera;
    }
    
    if (isset($_POST['btnComparar']) && !$errores_form) {
        $palabra = $_POST['palabra'];

        $palabra = str_replace(" ", "", $palabra);

        $arrpalabra = str_split(trim($palabra));

        $esnumero = false;
        for($i = 0; $i < count($arrpalabra); $i++){
            if (is_numeric($arrpalabra[$i])) {
                $esnumero = true;
            }
        }

        $resultado = "";

        $esIgual = true;
        
        for ($i = 0; $i < floor((count($arrpalabra)/2)); $i++) { 
            if ($arrpalabra[$i] != $arrpalabra[count($arrpalabra)-1-$i]) {
                $esIgual = false;
            }
        }
        
        if ($esIgual && $esnumero) {
            $resultado = $palabra." es un numero capicua.";
        } else if($esIgual && !$esnumero){
            $resultado = $palabra." es un palindromo.";
        } else if(!$esIgual && $esnumero){
            $resultado = $palabra." no es un numero capicua.";
        } else if(!$esIgual && !$esnumero){
            $resultado = $palabra." no es un palindromo.";
        } else{$resultado = "";}
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
        .div2 {
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
        .resultado {
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
        <p id="pTitulo">Dime una palabra o numero y te dire si es palindromo o un numero capicua.</p>
        <form action="ejerString2.php" method="post" id="formRipios"  enctype="multipart/form-data">
            <label for="palabra">Palabra o numero: </label>
            <input name="palabra" type="text" id="palabra"  value="<?php if(isset($_POST['palabra']) && $errores_form) {echo $_POST['palabra'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_primera){
                    echo "<span class='error'> * Campo Vacío *</span>";
                }
            ?>
            <br><br>
            <button name="btnComparar">Comparar</button>
        </form>
    </div>
    <div class="div2">
        <h1 class="h1Cent">Palindromo / Capicua - Resultado</h1>
        <?php 
            if(isset($_POST['btnComparar']) && !$errores_form && $resultado != "" && !$esnumero){
                echo "<p class='resultado'>".$resultado."</p>";
            }
        ?>
    </div>
    <div class="div2">
        <h1 class="h1Cent">Palindromo / Capicua - Resultado</h1>
        <?php 
            if(isset($_POST['btnComparar']) && !$errores_form && $resultado != "" && $esnumero){
                echo "<p class='resultado'>".$resultado."</p>";
            }
        ?>
    </div>
</body>
</html>