<!DOCTYPE html>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="entrada">
            <div style="text-align: left">
                <a href="central.php">regresar</a>
            </div>
            <h2 class="ti">Escribe</h2>
            <?php
                if(isset($_REQUEST['d']))
                {
                    echo "<span style='color: green'>Los datos se cargaron correctamente</span>";
                    echo "<br>";
                }
            ?>
            <form action="anotar.php" method="post">
                <textarea name="diario" cols="35" rows="20"></textarea>
                <br>
                <button type="submit">Anotar</button>
            </form>
        </div>
    </body>
</html>