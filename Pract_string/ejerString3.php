<?php 
    if(isset($_POST['btnComparar'])){
        $error_frase = $_POST['frase'] == "";
        $errores_form = $error_frase;
    }
    
    if (isset($_POST['btnComparar']) && !$errores_form) {
        $frase = $_POST['frase'];

        $fraseSinEspacio = str_replace(" ", "", $frase);

        $arrfrase = str_split(trim($fraseSinEspacio));

        $masDeTres = count($arrfrase) >= 3;

        $esnumero = false;
        for($i = 0; $i < count($arrfrase); $i++){
            if (is_numeric($arrfrase[$i])) {
                $esnumero = true;
            }
        }

        $resultado = "";
        
        if ($masDeTres) {

            $esIgual = true;
            
            for ($i = 0; $i < floor((count($arrfrase)/2)); $i++) { 
                if ($arrfrase[$i] != $arrfrase[count($arrfrase)-1-$i]) {
                    $esIgual = false;
                }
            }
            
            if($esIgual && !$esnumero) {
                $resultado = $frase." es una frase palindroma.";
            } else if(!$esIgual && !$esnumero){
                $resultado = $frase." no es una frase palindroma.";
            } else{$resultado = "";}
        } 
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
        <h1 class="h1Cent">Frases palindromas - Resultado</h1>
        <p id="pTitulo">Dime una frase y te dire si es una frase palindroma.</p>
        <form action="ejerString3.php" method="post" id="formRipios"  enctype="multipart/form-data">
            <label for="frase">Frase: </label>
            <input name="frase" type="text" id="frase"  value="<?php if(isset($_POST['frase']) && $errores_form) {echo $_POST['frase'];} ?>">
            <?php
                if(isset($_POST["btnComparar"]) && $error_frase){
                    echo "<br><span class='error'> *Campo Vacío*</span>";
                }
                if(isset($_POST["btnComparar"]) && !$error_frase && $esnumero){
                    echo "<br><span class='error'> *No se permiten numeros*</span>";
                }
                if(isset($_POST["btnComparar"]) && !$error_frase && !$esnumero && !$masDeTres){
                    echo "<br><span class='error'> *Minimo 3 letras*</span>";
                }
            ?>
            <br><br>
            <button name="btnComparar">Comparar</button>
        </form>
    </div>
    <div class="div2">
        <h1 class="h1Cent">Frases palindromas - Resultado</h1>
        <?php 
            if(isset($_POST['btnComparar']) && !$errores_form && $resultado != "" && $masDeTres){
                echo "<p class='resultado'>".$resultado."</p>";
            }
        ?>
    </div>
</body>
</html>