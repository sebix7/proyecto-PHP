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
    }
    else
    {
        return $resultado;
    }
    $db->close();
}

?>