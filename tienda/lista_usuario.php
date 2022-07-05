<?php

include "../conexion.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include "include/script.php"; ?>
    <title>Lisata de Usuarios</title>
</head>

<body>
    <?php include "include/header.php"; ?>
    <section id="container">


        <h1 class="title">Listado de Usuarios</h1>
        <a href="registro_usuario.php" class="btn_new">Crear Usuario</a>

        <table>
            <tr>
                <th scope=""><b>Nº</b></th>
                <th scope=""><b>Nombre</b></th>
                <th scope=""><b>Correo</b></th>
                <th scope=""><b>Rol</b></th>
                <th scope=""><b>Opciones</b></th>
            </tr>
            <?php

            ?>
            <tr>
                <td scope="">1</td>
                <td scope="">Jose</td>
                <td scope="">josev@gmail.com</td>
                <td scope="">Administrador</td>
                <td>
                    <a href="#" class="link_edit"><i class="fas fa-pen">Editar</i></a>
                    |
                    <a href="#" class="link_delete"><i class="fas fa-trash">Eliminar</i></a>
                </td>
            </tr>
            <tr>
                <td scope="">1</td>
                <td scope="">Jose</td>
                <td scope="">josev@gmail.com</td>
                <td scope="">Administrador</td>
                <td scope="">
                    <a href="#" class="link_edit"><i class="fas fa-pen">Editar</i></a>
                    |
                    <a href="#" class="link_delete"><i class="fas fa-trash">Eliminar</i></a>
                </td>
            <tr>
                <td scope="">1</td>
                <td scope="">Jose</td>
                <td scope="">josev@gmail.com</td>
                <td scope="">Administrador</td>
                <td scope="">
                    <a href="#" class="link_edit"><i class="fas fa-pen">Editar</i></a>
                    |
                    <a href="#" class="link_delete"><i class="fas fa-pen">Eliminar</i></a>
                </td>
        </table>

    </section>
    <?php include "include/footer.php"; ?>
</body>

</html>