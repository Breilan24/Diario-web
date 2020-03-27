<!DOCTYPE html>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="mo">
            <a href="central.php">regresar</a>
            <hr>
            <h2 class="ti">Cambiar contraseña</h2>
            <?php
                if(isset($_REQUEST['s']))
                {
                    echo "<span style='color: green'>Contraseña cambiada</span>";
                    echo "<br>";
                }
            ?>
            <form action="cambiar.php" method="post">
                <input type="password" name="antes" placeholder="Contraseña actual" class="es">
                <br>
                <?php
                    if(isset($_REQUEST['n']))
                    {
                        echo "<span style='color: red'>Contraseña incorrecta</span>";
                        echo "<br>";
                    }
                ?>
                <br>
                <input type="password" name="despues" placeholder="Contraseña nueva" class="es">
                <br>
                <br>
                <button type="submit">Cambiar</button>
            </form>
            <hr>
            <h2 class="ti">Borrar cuenta</h2>
            <form action="borrar.php" method="post">
                <input type="password" name="eli" placeholder="Contraseña actual" class="es">
                <br>
                <?php
                    if(isset($_REQUEST['p']))
                    {
                        echo "<span style='color: red'>Contraseña incorrecta</span>";
                    }
                ?>
                <br>
                <button type="submit">Borrar</button>
            </form>
        </div>
    </body>
</html>