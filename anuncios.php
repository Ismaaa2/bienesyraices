<?php
require 'includes/funciones.php';
incluirTempate('header');
?>

<main class="seccion contenedor">
    <h1>Casas y Depas en Venta</h1>
    <?php
    $limite = 10;
    $rand = 2;
    include 'includes/templates/anuncios.php';
    ?>
</main>

<?php incluirTempate('footer'); ?>