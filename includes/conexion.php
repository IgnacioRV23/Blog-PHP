<?php

//Variables para la conexion a la base de datos.
//Servidor.
$server = 'localhost';

//Usuario de base de datos
$username = 'sa';

//Contrasenia del usuario para la conexion
$password = 'sa';

//Nombre de la base de datos a la que se requiere la conexion.
$database = 'blog';

//Creacion de la conexion a la base de datos.
$db = mysqli_connect($server, $username, $password, $database);

//Se asigna el formato de de texto para la base de datos.
mysqli_query($db, "SET NAMES 'utf8'");