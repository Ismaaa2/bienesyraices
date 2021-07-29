<?php
require 'includes/funciones.php';
incluirTempate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>
    <div class="nosotros">
        <div class="nosotros-imagen-flex">
            <picture class="nosotros-imagen">
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
            </picture>
        </div>
        <div class="nosotros-texto">
            <h3>25 años de Experiencia</h3>
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
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptate ratione quibusdam consequatur
                dicta saepe accusantium debitis veniam assumenda, officiis, unde deleniti voluptates praesentium
                quaerat quasi et optio perferendis excepturi.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptate ratione quibusdam consequatur
                dicta saepe accusantium debitis veniam assumenda, officiis, unde deleniti voluptates praesentium
                quaerat quasi et optio perferendis excepturi.</p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptate ratione quibusdam consequatur
                dicta saepe accusantium debitis veniam assumenda, officiis, unde deleniti voluptates praesentium
                quaerat quasi et optio perferendis excepturi.</p>
        </div>
    </div>
</section>

<?php incluirTempate('footer'); ?>