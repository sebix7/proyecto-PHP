<?php
    include_once("../controller/PostController.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Posts</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include_once("partials/nav.php");
        ?>
        <div class="container-fluid">
            <h1 class="h2 mt-3">ULTIMOS 50 POSTS</h1>
            <table class="table table-sm mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" style="text-fluid">ID</th>
                        <th scope="col" style="text-fluid">Titulo</th>
                        <th scope="col" style="text-fluid">Imagen</th>
                        <th scope="col" style="text-fluid">Categoria</th>
                        <th scope="col" style="text-fluid">Fecha de creación</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_POST['titulo'])&&isset($_POST['contenido'])&&(isset($_FILES['imagen'])&&$_FILES['imagen']['error']==0)&&isset($_POST['categoria'])&&isset($_POST['fecha_de_creacion'])&&isset($_POST['imagenPorBorrar'])&&isset($_POST['id']))
                        {
                            actualizarPost($_POST['titulo'],$_POST['contenido'],$_FILES['imagen']['tmp_name'],$_FILES['imagen']['name'],$_POST['categoria'],$_POST['fecha_de_creacion'],$_POST['imagenPorBorrar'],$_POST['id']);
                        }
                        else if(isset($_POST['titulo'])&&isset($_POST['contenido'])&&(isset($_FILES['imagen'])&&$_FILES['imagen']['error']==0)&&isset($_POST['categoria'])&&isset($_POST['fecha_de_creacion']))
                        {
                            subirPost($_POST['titulo'],$_POST['contenido'],$_FILES['imagen']['tmp_name'],$_FILES['imagen']['name'],$_POST['categoria'],$_POST['fecha_de_creacion']);
                        }
                        $posts = obtenerPosts(50);
                        $i=1;
                        foreach($posts as $post)
                        {
                            $fecha = $post['fecha_de_creacion'];
                            $fechaModificada = date("d/m/Y", strtotime($fecha));
                            echo
                                "<tr>
                                    <th scope='row'>" . $i++ . "</th>
                                    <td>" . $post["id"] . "</td>
                                    <td>" . $post["titulo"] . "</td>
                                    <td><img src='../images/" . $post["imagen"] . "' class='img-fluid'></td>
                                    <td>" . $post["categoria"] . "</td>
                                    <td>" . $fechaModificada . "</td>
                                    <td><a href='editar-post.php?id=" . $post["id"] . "' class='btn btn-primary btn-sm'>Editar</a></td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>