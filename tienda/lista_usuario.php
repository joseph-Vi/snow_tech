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
                <th scope=""><b>Usuario</b></th>
                <th scope=""><b>Correo</b></th>
                <th scope=""><b>Rol</b></th>
                <th scope=""><b>Opciones</b></th>
            </tr>
            <?php

            $query = mysqli_query($conection, "SELECT u.id_usuario, u.nombre, u.correo, u.usuario, r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.id_rol");
            $result = mysqli_num_rows($query);

            if ($result > 0) {
                $index = 1;
                while ($data = mysqli_fetch_array($query)) {
            ?>
                    <tr>
                        <td><?php echo $index++ ?></td>
                        <td><?php echo $data['nombre'] ?></td>
                        <td><?php echo $data['usuario'] ?></td>
                        <td><?php echo $data['correo'] ?></td>
                        <td><?php echo $data['rol'] ?></td>
                        <td>
                            <a href="editar_usuario.php?id=<?php echo $data['id_usuario'] ?>" class="link_edit"><i class="fas fa-pen">Editar</i></a>
                            |
                            <a href="eliminar_usuario.php?id=<?php echo $data['id_usuario'] ?>" class="link_delete"><i class="fas fa-trash">Eliminar</i></a>
                        </td>
                    </tr>
            <?php
                }
            }

            ?>
        </table>

    </section>

    <?php include "include/footer.php"; ?>
</body>

</html>