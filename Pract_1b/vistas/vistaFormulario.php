<h1>Rellena tu CV</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre</label><br />
    <input type="text" id="nombre" name="nombre" placeholder="Teclee su nombre" maxlength=15 required value="<?php if (isset($_POST["nombre"])) {echo $_POST["nombre"];} ?>"><br />
        <?php
            if (isset($_POST["btnEnviar"]) && $error_nombre) {
                echo"<spam>*Campo vacio*</spam>";
            }
        ?>
    <label for="apellido">Apellido</label><br />
    <input type="text" id="apellido" name="apellido" placeholder="Teclee su apellido" value="<?php if (isset($_POST["apellido"])) {echo $_POST["apellido"];} ?>">
    <?php
            if (isset($_POST["btnEnviar"]) && $error_apellido) {
                echo"<spam>*Campo vacio*</spam>";
            }
        ?>
        <br />
    <label for="contraseña">Contraseña</label><br />
    <input type="password" id="contraseña" name="contraseña">
    <?php
            if (isset($_POST["btnEnviar"]) && $error_contraseña) {
                echo"<spam>*Campo vacio*</spam>";
            }
        ?>
        <br />
    <label for="dni">DNI</label><br />
    <input type="text" id="dni" name="dni" value="<?php if (isset($_POST["dni"])) {echo $_POST["dni"];} ?>">
    <?php
            if (isset($_POST["btnEnviar"]) && $error_dni) {
                echo"<spam>*Campo vacio*</spam>";
            }
        ?>
        <br />
    <label for="sexo">Sexo</label><br>
    <input type="radio" id="hombre" name="sex" value="mujer" checked>
    <label for="hombre" id="hombre" name="hombre">hombre</label>
    <input type="radio" id="mujer" name="sex" value="mujer">
    <label for="mujer" id="mujer" name="mujer">mujer</label>
    <?php
            if (isset($_POST["btnEnviar"]) && $error_sexo) {
                echo"<spam>*Elije 1*</spam>";
            }
        ?>
    <br><br>
    <label for="foto" id="foto" name="foto">Incluir mi foto: </label>
    <input type="file" name="imagen" id="imagen"><br><br>

    <label for="lugarNacimiento">Nacido en: </label>
    <select id="ciudad" name="ciudad">
        <option value="malaga">Malaga</option>
        <option value="sevilla">Sevilla</option>
        <option value="granada">Granada</option>
    </select><br><br>

    <label for="comentarios">Comentarios:</label>
    <textarea name="comentarios" id="comentarios" value="<?php if (isset($_POST["comentarios"])) {echo $_POST["comentarios"];} ?>"></textarea>
    <?php
            if (isset($_POST["btnEnviar"]) && $error_comentarios) {
                echo"<spam>*Campo vacio*</spam>";
            }
        ?>
    <br><br>
    <input type="checkbox" name="suscribirse" id="suscribirse">
    <label for="suscribirse">Suscribirse al boletin de novedades</label><br><br>

    <button type="submit" value="guardarCambios" name="btnEnviar">Guardar Cambios</button>
    <button type="reset">Borrar los datos introducidos</button>
</form>