<?php
    session_start();
?>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="central">
            <div id="hi"><a href="Inicio.php" style="color: red">salir</a></div>
            <br>
            <div style="float: left; width: 30%">
                <?php
                    if($_SESSION['genero']=='masculino')
                    {
                        echo '<img src="hombre.png" style="float: left">';
                    }
                    else if ($_SESSION['genero']=='femenino')
                    {
                        echo '<img src="mujer.png" style="float: left">';
                    }
                ?>
                <h2 style="float: left; margin:0"><?php echo $_SESSION['usuario']; ?></h2>
            </div>
            <div style="float: right;width: 70%; text-align: center;margin-top: 10px">
                <button style="float: left"><a href="escribir.php">escribir</a></button>
                <button><a href="leer.php">leer</a></button>
                <button style="float: right"><a href="cambio.php">modificar cuenta</a></button>
            </div>
        </div>
    </body>
</html>