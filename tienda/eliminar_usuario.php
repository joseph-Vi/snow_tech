<?php

if (empty($_REQUEST['id'])) {
    header('location: lista_usuario.php');
} else {
    include "../conexion.php";
    $idusuraio = $_REQUEST['id'];

    $query = mysqli_query($conection, "SELECT u.");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include "include/script.php"; ?>
    <title>Confirmar Eliminacion</title>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section id="container">
        <h1 class="title1">Eliminar Usuario</h1>
    </section>



    <?php include "include/footer.php"; ?>
</body>

</html>