<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Rellena tu CV</h1>
    <form action="recogida_datos.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label><br/>
        <input type="text" id="nombre" name="nombre"><br/>
        
        <label for="apellido">Apellido</label><br/>
        <input type="text" id="apellido" name="apellido"><br/>

        <label for="contraseña">Contraseña</label><br/>
        <input type="text" id="contraseña" name="contraseña"><br/>

        <label for="dni">DNI</label><br/>
        <input type="text" id="dni" name="dni"><br/>

        <label for="sexo">Sexo</label><br>
        <input type="radio" id="hombre" name="hombre">
        <label for="hombre" id="hombre" name="hombre">hombre</label><br>
        <input type="radio" id="mujer" name="mujer">
        <label for="mujer" id="mujer" name="mujer">mujer</label><br><br>

        <label for="foto" id="foto" name="foto">Incluir mi foto: </label>
        <input type="file" name="imagen" id="imagen"><br><br>

        <label for="lugarNacimiento">Nacido en: </label>
        <select id="ciudad" name="ciudad">
            <option value="malaga">Malaga</option>
            <option value="sevilla">Sevilla</option>
            <option value="granada">Granada</option>
        </select><br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios" id="comentarios"></textarea><br><br>
    
        <input type="checkbox" name="suscribirse" id="suscribirse">
        <label for="suscribirse">Suscribirse al boletin de novedades</label><br><br>

        <button type="submit">Guardar Cambios</button>
        <button type="reset">Borrar los datos introducidos</button>
    </form>
</body>
</html>