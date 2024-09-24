<h1>Esta es mi super página</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" value="" />
            <?php
                if(isset($_POST["brnEnviar"]) && $error_nombre) {
                    echo "<span class='error'> *campo obligatorio* </span>";
                }
            ?>
        </p>
        <p>
            <label for="nacido">Nacido en: </label>
            <select name="nacido" id="nacido">
                <option value="Málaga">Málaga</option>
                <option value="Granada">Granada</option>
                <option value="Almeria">Almeria</option>
            </select>
        </p>
        <p>
            <label>Sexo: </label>
            <input type="radio" name="sexo" id="hombre"><label for="hombre">Hombre</label>
            <input type="radio" name="sexo" id="mujer"><label for="mujer">Mujer</label>
        </p>
        <p>
            <label for="aficiones">Aficiones: </label>
            <label>Deportes </label>
            <input type="checkbox" name="aficiones[]" id="deportes" <?php if(isset($_POST["aficiones"]) && mi_in_array("deportes",$_POST["aficiones"])) echo "checked";?>>
            <label>Lectura </label>
            <input type="checkbox" name="aficiones[]" id="lectura">
            <label>Otros </label>
            <input type="checkbox" name="aficiones[]" id="otros">
        </p>
        <p>
            <label for="comentarios">Comentarios: </label>
            <textarea name="comentarios" id="comentarios"></textarea>
        </p>
        <p>
            <button type="submit" name="btnEnviar">Enviar</button>
        </p>
    </form>