<?php
    $conexion=mysqli_connect("localhost","root","","diario") or die ("problemas de conexion");
    $igual=mysqli_query($conexion,"select * from usuarios where nombre_usuario='$_REQUEST[usuario]'") or 
    die ("problemas con el select: " . mysqli_error($conexion));
    if (mysqli_fetch_array($igual))
    {
        header("location: crear_cuenta.php?repetir=1");
    }
    else
    {
        $crear=mysqli_query($conexion,"insert into usuarios(nombre_usuario,contraseña,genero) values ('$_REQUEST[usuario]','$_REQUEST[clave]','$_REQUEST[genero]')") or
        die ("problemas en el insert: " . mysqli_error($conexion));
        header("location: Inicio.php");
    }
?>