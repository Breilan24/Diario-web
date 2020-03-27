<!DOCTYPE html>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="cuenta">
            <div id="hi"><a href="inicio.php" id="hi">Regresar</a></div>
            <h2 class="ti">Crear una cuenta</h2>
            <form action="creacion.php" method="post">
                <label for="usuario">Nombre de usuario: </label>
                <br>
                <input type="text" name="usuario" id="usuario" placeholder="Debe ser unico" maxlength="40" class="es" required>
                <?php
                    if(isset($_REQUEST['repetir']))
                    {
                        echo "<br>";
                        echo "<span style='color: red'>El nombre ya existe</span>";
                    }
                ?>
                <hr>
                <label for="clave">Contraseña: </label>
                <br>
                <input type="password" name="clave" id="clave" maxlength="20" placeholder="No pasar de 20 caracteres" class="es" required>
                <hr>
                <label for="genero">Género:</label>
                <br>
                <input type="radio" name="genero" id="genero" value="masculino" required>Masculino
                <input type="radio" name="genero" id="genero" value="femenino" required>Femenino
                <br>
                <br>
                <button type="submit">Crear</button>
            </form>
        </div>
    </body>
</html>