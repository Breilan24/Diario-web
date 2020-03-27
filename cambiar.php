<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","diario") or die("problemas con la base de datos");
    $cam=mysqli_query($conexion,"select nombre_usuario,contraseña from usuarios where nombre_usuario='$_SESSION[usuario]' and contraseña='$_REQUEST[antes]'") or
    die ("problemas en el select" . mysqli_error($conexion));
    if (mysqli_fetch_array($cam))
    {
        $co=mysqli_query($conexion,"update usuarios set contraseña='$_REQUEST[despues]' where contraseña='$_REQUEST[antes]' and nombre_usuario='$_SESSION[usuario]'") or 
        die ("problemas de actualizacion" . mysqli_error($conexion));
        header("location: cambio.php?s=1");
    }
    else
    {
        header("location: cambio.php?n=1");
    }
?>