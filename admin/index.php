<?php

require '../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header('LOCATION: http://localhost/bienesraices_inicio');
}

require '../includes/config/databases.php';
$db = conectarDB();

$query = "SELECT * FROM propiedades";

$resultadoPropiedades = mysqli_query($db, $query);



$resultado = $_GET['resultado'] ?? null;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {

        $query = "SELECT imagen FROM propiedades WHERE id = ${id};";
        $resultado = mysqli_query($db, $query);

        $propiedad = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $propiedad['imagen']);

        $query = "DELETE FROM propiedades WHERE id = ${id};";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('LOCATION: http://localhost/bienesraices_inicio/admin?resultado=3');
        }
    }
}



incluirTempate('header');
?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>
    <?php if (intval($resultado) === 1) : ?>
        <p class="alerta exito"> La propiedad se añadió correctamente </p>
    <?php elseif (intval($resultado) === 2) : ?>
        <p class="alerta exito"> La propiedad se actualizó correctamente </p>
    <?php elseif (intval($resultado) === 3) : ?>
        <p class="alerta exito"> La propiedad se eliminó correctamente </p>
    <?php endif; ?>
    <a href="/bienesraices_inicio/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>


    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($resultadoPropiedades)) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <?php echo $row['titulo']; ?>
                    </td>
                    <td><img src="/bienesraices_inicio/imagenes/<?php echo $row['imagen']; ?>" alt="" class="imagen-tabla"></td>
                    <td><?php echo $row['precio']; ?>€</td>
                    <td>
                        <a href="/bienesraices_inicio/admin/propiedades/actualizar.php?id=<?php echo $row['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                        <form method="POST" class="w-100">

                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                            <input type="submit" value="Eliminar" class="boton-rojo-block" />
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
mysqli_close($db);
incluirTempate('footer');
?>