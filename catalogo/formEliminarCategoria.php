<?php

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chekeo = checkProductoPorCategoria();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Baja de una categoria</h1>

<?php
        if ( $chekeo > 0 ) {
?>
        <div class="alert alert-danger col-6 mx-auto">
            <i class="bi bi-exclamation-triangle"></i>
            No se puede eliminar la categorias ya que tiene productos relacionados
            <br>
            <a href="adminCategorias.php" class="btn btn-light mt-3">
                Volver a panel de categorias
            </a>
        </div>
<?php
        }
        else {
            $categoria = verCategoriaPorID();
?>
        <div class="alert bg-light p-4 col-6 mx-auto shadow text-danger">
            Se eliminará la categoria: <span class="lead"><?= $categoria['catNombre'] ?></span>
            <form action="eliminarCategoria.php" method="post">
                <input type="hidden" name="idCategoria"
                        value="<?= $categoria['idCategoria'] ?>">
                <button class="btn btn-danger my-3 px-4">Confirmar baja</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    Volver a panel de categorias
                </a>
            </form>
        </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>