<?php
require 'includes/funciones.php';
incluirTempate('header');
?>

<main class="contenedor seccion contendo-centrado">
    <h1>Nuestro Blog</h1>

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
                <p>Escrito el: <span>20/10/2012</span>por: <span>Admin</span></p>
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
                <p>Escrito el: <span>20/10/2012</span>por: <span>Admin</span></p>
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
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
            </picture>
        </div>

        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2012</span>por: <span>Admin</span></p>
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
                <p>Escrito el: <span>20/10/2012</span>por: <span>Admin</span></p>
                <p>
                    Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                    ahorrando dinero.
                </p>
            </a>
        </div>
    </article>
</main>
<?php incluirTempate('footer'); ?>