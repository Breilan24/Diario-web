<?php
    session_start();
    $conexion=mysqli_connect("localhost","root","","diario") or die ("problemas de conexion");
    $entrar=mysqli_query($conexion,"select nombre_usuario,contraseña,genero from usuarios where nombre_usuario='$_REQUEST[nombre]' and contraseña='$_REQUEST[contraseña]'") or 
    die ("problemas en el select" . mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($entrar))
    {
        $_SESSION['usuario']=$reg['nombre_usuario'];
        $_SESSION['genero']=$reg['genero'];
        header("location:central.php");
    }
    else
    {
        header("location:Inicio.php?in=1");
    }
?>