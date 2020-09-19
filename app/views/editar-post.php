<?php
    include_once("../controller/PostController.php");
    $id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Post</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include_once("partials/nav.php");
            echo
                "<div class='container-fluid'>
                    <h1 class='h2 mt-3'>ID DEL POST: <strong>" . $id . "</strong></h1>";
            $post = obtenerPostPorID($id);
            foreach($post as $columna)
            {
            echo
                    "<form action='posts.php' method='POST' enctype='multipart/form-data'>
                        <div>
                            <div class='form-group'>
                                <label for='titulo'>Editar titulo:</label>
                                <input type='text' class='form-control' id='titulo' name='titulo' value='" . $columna["titulo"] . "' required>
                            </div>
                            <div class='form-group'>
                                <label for='categoria'>Editar categoria:</label>
                                <input type='text' class='form-control' id='categoria' name='categoria' value='" . $columna["categoria"] . "' required>
                            </div>
                            <div class='form-group'>
                                <label for='contenido'>Editar contenido:</label>
                                <textarea class='form-control' id='contenido' name='contenido' required>" . $columna["contenido"] . "</textarea>
                            </div>
                            <div class='form-group row'>
                                <div class='col-6'>
                                    <label>Subir imagen: </label>&nbsp;
                                    <input type='file' id='imagen' name='imagen' required>
                                </div>
                                <div class='col-6'>
                                    <label for='fecha_de_creacion'>Ingrese fecha de creación:</label>&nbsp;
                                    <input type='date' id='fecha_de_creacion' name='fecha_de_creacion' value='" . $columna["fecha_de_creacion"] . "' required>
                                </div>
                            </div>
                            <input type='hidden' id='imagenPorBorrar' name='imagenPorBorrar' value='" . $columna["imagen"] . "'>
                            <input type='hidden' id='id' name='id' value='" . $columna["id"] . "'>
                            <hr>
                            <div class='text-center'>
                                <button type='submit' class='btn btn-dark mb-3'>Actualizar</button>
                                <a href='eliminar-post.php?id=" . $columna["id"] . "' class='btn btn-danger mb-3'>Eliminar</a>
                            </div>
                        </div>
                    </form>
                </div>";
            }
        ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>