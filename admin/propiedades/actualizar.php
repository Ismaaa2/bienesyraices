<?php

require '../../includes/funciones.php';
$auth = estaAutenticado();

if (!$auth) {
    header('LOCATION: http://localhost/bienesraices_inicio');
}

$id = $_GET['id'];
$id =  filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /bienesraices_inicio/admin');
}


require '../../includes/config/databases.php';
$db = conectarDB();

$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);




$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

$errores = [];


$titulo = $propiedad['titulo'];
$precio = intval($propiedad['precio']);
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedorId = $propiedad['vendedorid'];
$imagenPropiedad = $propiedad['imagen'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    // var_dump($_POST);


    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId =  !empty($_POST['vendedor']) ? mysqli_real_escape_string($db, $_POST['vendedor']) : '';
    $creado = date(('Y/m/d'));


    $titulo = filter_var($titulo, FILTER_SANITIZE_STRING);
    $precio = filter_var($precio, FILTER_VALIDATE_INT);
    $descripcion = filter_var($descripcion, FILTER_SANITIZE_STRING);
    $habitaciones = filter_var($habitaciones, FILTER_VALIDATE_INT);
    $wc = filter_var($wc, FILTER_VALIDATE_INT);
    $estacionamiento = filter_var($estacionamiento, FILTER_VALIDATE_INT);
    $vendedorId = filter_var($vendedorId, FILTER_VALIDATE_INT);


    $imagen = $_FILES['imagen'];



    if (empty($titulo)) {
        $errores[] = "Debes añadir un titulo";
    }

    if (empty($precio)) {
        $errores[] = "Debes añadir un precio";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "Debes tener al menos 50 carácteres en la descripcion";
    }

    if (empty($habitaciones)) {
        $errores[] = "Debes añadir habitaciones";
    }

    if (empty($wc)) {
        $errores[] = "Debes añadir wc";
    }

    if (empty($estacionamiento)) {
        $errores[] = "Debes añadir estacionamiento";
    }

    if (empty($vendedorId)) {
        $errores[] = "Debes añadir el vendedorId";
    }


    if (empty($errores)) {


        $carpteImagen = "../../imagenes/";

        if (!is_dir($carpteImagen)) {
            mkdir($carpteImagen);
        }

        $nombreImagen = '';

        if ($imagen['name']) {
            unlink($carpteImagen . $propiedad['imagen']);
            $nombreImagen = md5(uniqid(rand(), true)) . '.jpg';

            move_uploaded_file($imagen['tmp_name'], $carpteImagen . $nombreImagen);
        } else {
            $nombreImagen = $propiedad['imagen'];
        }





        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}',descripcion = '${descripcion}', habitaciones = ${habitaciones}, wc = ${wc}," .
            " estacionamiento = ${estacionamiento}, vendedorid = ${vendedorId} WHERE id = ${id};";


        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: http://localhost/bienesraices_inicio/admin?resultado=2');
        } else {
            echo  $query;
        }
    }
endif;

incluirTempate('header');
?>


<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="/bienesraices_inicio/admin/" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>" />

            <label for="precio">Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>" />

            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" accept="image/jpg, image/png, image/jpeg" name="imagen" />

            <img src="http://localhost/bienesraices_inicio/imagenes/<?php echo $imagenPropiedad; ?>" alt="Imagen small" class="imagen-small">

            <label for="descripcion">Descripcion: </label>
            <textarea name="descripcion" name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>
                Información de la Propiedad
            </legend>

            <label for="habitaciones">Habitaciones: </label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>" />

            <label for="wc">Baños: </label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>" />

            <label for="estacionamiento">Estacionamiento: </label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>" />
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="vendedor">
                <option selected disabled value="">-- Seleccione --</option>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedorId == $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'] ?>"> <?php echo $row['nombre'] . ' ' . $row['apellido']; ?> </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Actualizar" class="boton boton-verde">
    </form>
</main>

<?php
incluirTempate('footer');
?>