<?php
if (isset($_POST['btnComparar'])) {
    $error_numero = $_POST['numero'] == "";
    function comprobarFormato()
    {
        $arrNumRomano = str_split(strtoupper($_POST["numero"]));
        for ($i = 0; $i < count($arrNumRomano); $i++) {
            if (
                $arrNumRomano[$i] != "I" && $arrNumRomano[$i] != "V" &&
                $arrNumRomano[$i] != "X" && $arrNumRomano[$i] != "L" &&
                $arrNumRomano[$i] != "C" && $arrNumRomano[$i] != "D" &&
                $arrNumRomano[$i] != "M"
            ) {
                return true;
            }
        }
        return false;
    }
    $error_formato = comprobarFormato();
    function comprobarCantNum(){
        $arrNumRomano = str_split(strtoupper($_POST["numero"]));
        $contI = 0;
        $contX = 0;
        $contC = 0;
        $contM = 0;
        $contV = 0;
        $contL = 0;
        $contD = 0;

        for ($i = 0; $i < count($arrNumRomano); $i++) {
            if ($arrNumRomano[$i] == 'I') {
                $contI++;
            } else if ($arrNumRomano[$i] == 'V') {
                $contV++;
            } else if ($arrNumRomano[$i] == 'X') {
                $contX++;
            } else if ($arrNumRomano[$i] == 'L') {
                $contL++;
            } else if ($arrNumRomano[$i] == 'C') {
                $contC++;
            } else if ($arrNumRomano[$i] == 'D') {
                $contD++;
            } else if ($arrNumRomano[$i] == 'M') {
                $contM++;
            }
        }

        if ($contI > 4 || $contX > 4 || $contC > 4 || $contM > 4) {
            return true;
        } else if ($contV > 1 || $contL > 1 || $contD > 1) {
            return true;
        }
        return false;
    }
    $error_cant_num = comprobarCantNum();

     
    $errores_form = $error_numero || $error_formato || $error_cant_num;
}

if (isset($_POST['btnComparar']) && !$errores_form) {


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

        #formRomanosArabes {
            margin: 1em;
        }

        #pTitulo {
            margin: 0.5em;
        }

        .resultado {
            padding-left: 1em;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div id="divRipios">
        <h1 class="h1Cent">Romanos a árabes- Formulario</h1>
        <p id="pTitulo">Dime una cifra en numeros romanos y lo convertiré a cifras árabes.</p>
        <form action="ejerString4.php" method="post" id="formRomanosArabes" enctype="multipart/form-data">
            <label for="numero">numero: </label>
            <input name="numero" type="text" id="numero" value="<?php if (isset($_POST['numero']) && $errores_form) {
                echo $_POST['numero'];
            } ?>">
            <?php
            if (isset($_POST["btnComparar"]) && $error_numero) {
                echo "<br><span class='error'> *Campo Vacío*</span>";
            }
            if (isset($_POST["btnComparar"]) && !$error_numero && $error_formato) {
                echo "<br><span class='error'> *Solo se permiten numeros romanos*</span>";
            }
            if (isset($_POST["btnComparar"]) && !$error_numero && !$error_formato && $error_cant_num) {
                echo "<br><span class='error'> *Se permiten como maximo 4 de (I,X,C,M) y 1 de (V,L,D)*</span>";
            }
            ?>
            <br><br>
            <button name="btnComparar">Comparar</button>
        </form>
    </div>
    <div class="div2">
        <h1 class="h1Cent">Romanos a árabes - Resultado</h1>
    </div>
</body>

</html>