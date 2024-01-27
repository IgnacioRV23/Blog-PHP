<?php

//Valida si no existe la sesion de un usuario y lo redirige al index.
if(!isset($_SESSION))
{
    session_start();
}

if(!isset($_SESSION['usuario']))
{
    header('Location: index.php');
}