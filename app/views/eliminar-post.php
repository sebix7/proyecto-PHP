<?php
    include_once("../controller/PostController.php");
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $resultado = eliminarPost($id);
        if($resultado)
        {
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar Post</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include_once("partials/nav.php");
        ?>
        <div class="container-fluid">
            <div class="alert alert-danger text-center mt-3">
                No existe ningún post con este ID.
            </div>
        </div>
    </body>
</html>