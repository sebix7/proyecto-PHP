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
        echo "Por favor introduzca un ID";
        exit();
    }
	$db = new Database();
    $consulta = "SELECT titulo, imagen, categoria, fecha_de_creacion, contenido FROM posts WHERE id LIKE " . $id;
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
        $db->insert($insert);
        $db->close();
    }
    else
    {
        echo "No funca";
    }
}

?>