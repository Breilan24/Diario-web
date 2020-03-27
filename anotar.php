<?php
    session_start();
    $di = fopen("$_SESSION[usuario].txt", "a") or
    die("Problemas en la creacion");
    fputs($di, date("j/n/y") . " " . date("H:i:s"));
    fputs($di, "\n");
    fputs($di, "$_SESSION[usuario]");
    fputs($di, "\n");
    fputs($di, "\n");
    fputs($di, $_REQUEST['diario']);
    fputs($di, "\n");
    fputs($di, "--------------------------------------------------------");
    fputs($di, "\n");
    fclose($di);
    header("location: escribir.php?d=1");
?>
