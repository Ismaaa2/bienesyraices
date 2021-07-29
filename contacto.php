<?php
require 'includes/funciones.php';
incluirTempate('header');
?>

<main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen de contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Tu email">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" placeholder="Tu teléfono">

            <label for="mensaje">Tu Mensaje:</label>
            <textarea name="mensaje" id="mensaje"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o Compra: </label>
            <select name="opciones" id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Teléfono</label>
            <input type="number" name="presupuesto" id="presupuesto" placeholder="Tu precio o presupuesto">
        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <p>¿Cómo desea ser contactado?</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Teléfono: </label>
                <input type="radio" name="contactar" id="contactar-telefono">

                <label for="contactar-email">Email: </label>
                <input type="radio" name="contactar" id="contactar-email">
            </div>
            <p>Si eligió telefono, elija la fecha y la hora</p>

            <label for="fecha">Teléfono: </label>
            <input type="date" id="fecha">

            <label for="hora">Hora: </label>
            <input type="time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton boton-verde">
    </form>
</main>

<?php incluirTempate('footer'); ?>