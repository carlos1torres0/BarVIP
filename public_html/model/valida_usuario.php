<?php
    include('funciones.php');
    include('crearusuario.php');
    session_start();
    $_SESSION['us_nombre']=$_POST['us_nombre'];
    $_SESSION['us_contraseña']=$_POST['us_password'];
    $miconexion=conectar_bd('root', 'bdbarvip');
    $resultado=consulta($miconexion,"select * from usuario where nombreusuario='{$_SESSION['us_nombre']}' and password='{$_SESSION['us_password']}'");
?>

