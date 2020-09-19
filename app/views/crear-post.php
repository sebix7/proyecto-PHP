<?php
    include_once("../controller/PostController.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Crear post</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include_once("partials/nav.php");
        ?>
        <div class='container-fluid'>
            <h1 class='h2 mt-3'>CREAR NUEVO POST</h1>
            <form action="posts.php" method="POST" enctype="multipart/form-data">
                <div>
                    <div class="form-group">
                        <label for="titulo">Ingrese titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Ingrese categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" required>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Ingrese contenido:</label>
                        <textarea class="form-control" id="contenido" name="contenido" required></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Subir imagen: </label>&nbsp;
                            <input type="file" id=imagen" name="imagen" required>
                        </div>
                        <div class="col-6">
                            <label for="fecha_de_creacion">Ingrese fecha de creación:</label>&nbsp;
                            <input type="date" id="fecha_de_creacion" name="fecha_de_creacion" required>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>