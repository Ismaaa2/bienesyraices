<?php

declare(strict_types=1);
require 'includes/funciones.php';
incluirTempate('header', $inicio = true);
?>

<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">
    <h2>Casas y depas en ventas</h2>
    <?php 
        $limite = 3;
        $rand = 1;
        include 'includes/templates/anuncios.php';
    ?> 
    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton boton-verde">Ver todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti repellendus nulla eligendi ipsa vel
        sapiente porro placeat exercitationem.</p>
    <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2012 </span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>


        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2012 </span>por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                        ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote class="blockquote">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis quidem asperiores neque ad
                porro voluptatum, eaque illum officia quo aliquid.
            </blockquote>
            <p>Ismael Bonilla</p>
        </div>
    </section>
</div>

<?php incluirTempate('footer'); ?>