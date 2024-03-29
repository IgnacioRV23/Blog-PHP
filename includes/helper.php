<?php

include_once 'conexion.php';

//Funcion que obtienen todas las categorias del blog de la BD.
function ConseguirCategorias($conexion) {
    $sql = "SELECT * FROM categorias ORDER BY nombre ASC";

    $categorias = mysqli_query($conexion, $sql);

    //Se setea el array vacio en caso de que no ingrese en la condicion.
    $result = array();

    //Valida que el query se ejecutara de manera correcta y que tenga mas de un registro.
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $result = $categorias;
    }

    return $categorias;
}

function ConseguirEntradas($conexion) {
    $sql = "SELECT ent.id, ent.titulo, ent.descripcion, ent.fecha, cat.nombre AS categoria "
            . "FROM entradas AS ent "
            . "INNER JOIN categorias AS cat ON ent.categoria_id = cat.id "
            . "ORDER BY ent.id DESC;";
            

    $entradas = mysqli_query($conexion, $sql);

    $result = array();

    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $result = $entradas;
    }

    return $entradas;
}

function ConseguirEntrada($conexion, $id) {
    $sql = "SELECT ent.id, ent.titulo, ent.descripcion, ent.fecha, cat.nombre AS categoria "
            . "FROM entradas AS ent "
            . "INNER JOIN categorias AS cat ON ent.categoria_id = cat.id "
            . "WHERE ent.id = $id";
            

    $entrada = mysqli_query($conexion, $sql);

    $result = array();

    if ($entrada && mysqli_num_rows($entrada) >= 1) {
        $result = $entrada;
    }

    return $entrada;
}