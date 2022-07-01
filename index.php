<?php

$alert = '';
if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['clave'])) {
        echo $alert = "Ingrese su nombre de usuario y su clave";
    } else {
        require_once "conexion.php";
        $user = $_POST['usuario'];
        $pass = $_POST['clave'];
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    <link rel="icon" type="image/png" href="./images/logo.png" sizes="16x16">
</head>

<body>

    <div class="content">
        <form action="" method="post">

            <h3>Iniciar Sesión</h3>
            <img src="./images/" alt="Login">

            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="clave" placeholder="Contraseña">
            <p class="alert"></p>
            <input type="submit" value="Ingresar">
            <a href="">Olvidaste tu contraseña?</a>

        </form>
    </div>

</body>

</html>