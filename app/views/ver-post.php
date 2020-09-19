<?php
    include_once("../controller/PostController.php");
    $id = $_GET["id"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ver Post</title>
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
                    "<div class='jumbotron text-center bg-light mt-3' style='margin-bottom:0'>
                        <div class='row no-gutters'>
                            <div class='col-md-4'>
                                <img src='../images/" . $columna["imagen"] . "' class='card-img'>
                            </div>
                            <div class='col-md-8'>
                                <div class='card-body'>
                                    <h5 class='card-title'>" . $columna['titulo'] . "</h5>
                                    <h6>" . $columna["categoria"] . " - " . $columna["fecha_de_creacion"] . "</h6>
                                    <p class='card-text'>" . $columna["contenido"] . "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
            }
        ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>