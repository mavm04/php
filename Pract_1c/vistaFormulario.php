<h1>Esta es mi super página</h1>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>

        <label for="nacidoEn">Nacido en:</label>
        <select name="nacidoEn" id="nacidoEn">
            <option value="Málaga">Málaga</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Granada">Granada</option>
        </select>
        <br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" name="hombre" id="hombre"><label for="hombre">Hombre</label>
        <input type="radio" name="mujer" id="mujer"><label for="mujer">Mujer</label>
        <br><br>

        <label for="aficiones">Aficiones:</label>
        <label for="deportes">Deportes</label>
        <input type="checkbox" name="deportes" id="deportes">
        <label for="lectura">Lectura</label>
        <input type="checkbox" name="lectura" id="lectura">
        <label for="otros">Otros</label>
        <input type="checkbox" name="otros" id="otros">
        <br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios" id="comentarios"></textarea>
        <br><br>

        <button type="submit" value="guardarCambios" name="btnEnviar">Guardar Cambios</button>
    </form>