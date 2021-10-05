<?php
    include('funciones.php');
    include('crearusuario.php');
    session_start();
    $_SESSION['us_nombre']=$_POST['us_nombre'];
    $_SESSION['us_email']=$_POST['us_email'];
    $_SESSION['us_password']=$_POST['us_password'];
    $miconexion=conectar_bd('root', 'bdbarvip');
    $resultado=consulta($miconexion,"select * from usuario where nombreusuario='{$_SESSION['us_nombre']}' and email='{$_SESSION['us_email']}'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu_principal.css">
    <title>Maquetado responsive</title>
</head>
<body class="grid-container">
    <header class="header"> HEADER</header>
    <nav class="navbar"> NAVBAR</nav>
    <aside class="sidebar"> SIDEBAR</aside>
    <aside class="main"> MAIN</aside>
    <footer class="footer"> FOOTER</footer>
</body>
</html>