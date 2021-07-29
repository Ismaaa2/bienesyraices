<?php

require 'includes/config/databases.php';
$db = conectarDB();
$id = $_GET['id'];
$query = "SELECT * FROM propiedades WHERE id = ${id};";

$resultado = mysqli_query($db, $query);

if( !$resultado -> num_rows ){
    header('Location: /bienesraices_inicio/anuncios.php');
}

$resultado = mysqli_fetch_assoc($resultado);

require 'includes/funciones.php';
incluirTempate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1><?php echo $resultado['titulo']; ?></h1>
    <img lazy="loading" src="imagenes/<?php echo $resultado['imagen']; ?>" alt="imagen de la proepiedad">
    <div class="resumen-propiedad">
        <p class="precio"><?php echo $resultado['precio']; ?>€</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p><?php echo $resultado['wc']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                <p><?php echo $resultado['estacionamiento']; ?></p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                <p><?php echo $resultado['habitaciones']; ?></p>
            </li>
        </ul>

        <p>
            <?php echo $resultado['descripcion']; ?>
    </div>
</main>

<?php incluirTempate('footer'); ?>