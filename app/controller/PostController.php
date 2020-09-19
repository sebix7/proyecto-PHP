<?php

include_once ("../helper/Database.php");

function obtenerPosts($limite)
{
	$db = new Database();
    $consulta = "SELECT id, titulo, imagen, categoria, fecha_de_creacion FROM posts ORDER BY fecha_de_creacion DESC LIMIT " . $limite;
    $resultado = $db->query($consulta);
    if(!$resultado)
    {
        echo "No hay posts";
        exit();
    }
    else
    {
        return $resultado;
    }
    $db->close();
}

function obtenerPostPorId($id)
{
    if(!is_numeric($id))
    {
        echo "Error - Por favor ingrese un número";
        exit();
    }
	$db = new Database();
    $consulta = "SELECT * FROM posts WHERE id LIKE " . $id;
    $resultado = $db->query($consulta);
    if(!$resultado)
    {
        echo "No existe este post";
        exit();
    }
    else
    {
        return $resultado;
    }
    $db->close();
}

function subirPost($titulo, $contenido, $imagen_tmp, $imagen_name, $categoria, $fecha_de_creacion)
{
    if(move_uploaded_file($imagen_tmp, "../images/" . $imagen_name))
    {
        $db = new Database();
        $insert = "INSERT INTO posts (titulo, contenido, imagen, categoria, fecha_de_creacion) VALUES ('$titulo', '$contenido', '$imagen_name' , '$categoria', '$fecha_de_creacion')";
        $db->query2($insert);
        $db->close();
    }
}

function actualizarPost($titulo, $contenido, $imagen_tmp, $imagen_name, $categoria, $fecha_de_creacion, $imagenPorBorrar, $id)
{
    unlink("../images/" . $imagenPorBorrar);
    if(move_uploaded_file($imagen_tmp, "../images/" . $imagen_name))
    {
        $db = new Database();
        $update = "UPDATE posts SET titulo='$titulo', contenido='$contenido', imagen='$imagen_name', categoria='$categoria', fecha_de_creacion='$fecha_de_creacion' WHERE id LIKE " . $id;
        $db->query2($update);
        $db->close();
    }
}

?>