<!DOCTYPE html>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="sesion">
            <h2 class="ti">Iniciar sección</h2>
            <form action="entrar.php" method="post">
                <input type="text" placeholder="Escriba su nombre de usuario" name="nombre" size="21" class="es">
                <hr>
                <input type="password" name="contraseña" placeholder="Escriba su contraseña" class="es">
                <hr>
                <?php
                    if(isset($_REQUEST["in"]))
                    {
                        echo "<span style='color: red'>El nombre de usuario o la contraseña son erroneos</span>";
                        echo "<br>";
                    }
                    if(isset($_REQUEST['b']))
                    {
                        echo "<span style='color: green'>Borrado exitoso</span>";
                        echo "<br>";
                    }
                ?>
                <button type="submit">Acceder</button>
            </form>
            <br>
            <em id="hi">¿no tienes una cuenta? <a href="crear_cuenta.php">crear una cuenta</a></em>
        </div>
    </body>
</html>