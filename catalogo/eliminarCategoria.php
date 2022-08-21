<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = eliminarCategoria();
    $css = 'danger';
    $mensaje = 'No se pudo eliminar la categoria.';
    if( $chequeo ){
        $css = 'success';
        $mensaje = 'Categoria eliminada correctamente.';
    }

    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de una categoria</h1>

        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-light m-2">
                volver a panel de categorias
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>