<?php
require 'includes/funciones.php';
incluirTempate('header');
?>


<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img lazy="loading" src="build/img/destacada2.webpb" alt="imagen de la proepiedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consectetur eros a nisi consectetur,
            ornare interdum ante vulputate. Curabitur id fringilla risus. Praesent gravida, sapien ac feugiat
            varius, arcu dolor finibus lectus, vulputate luctus tellus libero in risus. Fusce malesuada eros quam,
            at pulvinar purus bibendum sed. Suspendisse potenti. Praesent suscipit tincidunt maximus. Nunc ornare
            est ac sem laoreet, eget finibus leo iaculis.

            Phasellus scelerisque pharetra urna, at fringilla neque ornare vitae. Nunc vitae efficitur eros, in
            condimentum enim. Cras faucibus velit libero, sit amet dictum sapien sollicitudin vitae. Phasellus vel
            sollicitudin libero. Vivamus finibus lectus erat, vitae vehicula tortor feugiat vitae. Proin quis justo
            massa. Sed et nisi libero. In sit amet eleifend enim.</p>

        <p>Etiam ut felis posuere, porttitor libero nec, imperdiet nibh. Aliquam vitae turpis orci. Suspendisse et
            congue lacus, ac viverra ipsum. Cras pulvinar hendrerit nisl, nec hendrerit diam molestie vel. Nulla in
            felis porttitor, fermentum urna sed, tristique felis. Morbi ultricies facilisis nibh vel laoreet. Sed
            vel justo commodo, gravida lorem ut, placerat augue.</p>
    </div>
</main>

<?php incluirTempate('footer'); ?>