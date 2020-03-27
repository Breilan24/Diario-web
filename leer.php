<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Diario web</title>
        <link rel="stylesheet" href="diseño.css">
    </head>
    <body>
        <div id="lee">
            <div style="position: fixed; margin-left: -60px;">
                <a href="central.php" class="hi" style="color: orange">regresar</a>
            </div>
            <?php
                $le = fopen("$_SESSION[usuario].txt", "r") or
                die("No has escrito nada");
                while (!feof($le)) 
                {
                    $linea = fgets($le);
                    $lineasalto = nl2br($linea);
                    echo $lineasalto;
                }
                fclose($le);
            ?>
        </div>
    </body>
</html>