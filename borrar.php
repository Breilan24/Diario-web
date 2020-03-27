<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","diario") or die("problemas en la conexion");
    $el=mysqli_query($conexion,"select nombre_usuario,contraseña from usuarios where nombre_usuario='$_SESSION[usuario]' and contraseña='$_REQUEST[eli]'") or
    die ("problemas en el select" . mysqli_error($conexion));;
    if(mysqli_fetch_array($el))
    {
        $bor=mysqli_query($conexion,"delete from usuarios where nombre_usuario='$_SESSION[usuario]' and contraseña='$_REQUEST[eli]'") or
        die("problemas en el borrado" . mysqli_error($conexion));
        unlink("$_SESSION[usuario].txt");
        header("location: Inicio.php?b=1");
    }
    else
    {
        header("location: cambio.php?p=1");
    }
?>