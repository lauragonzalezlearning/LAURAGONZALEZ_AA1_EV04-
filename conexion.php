<?php

$localhost = "localhost";
$BaseDatos = "bdaprendiz";
$usuario = "root";
$password = "";

try {
    //code...

    $conexion = new mysqli($localhost,$usuario,$password,$bdaprendiz);
    echo "conexion exitosa";

} catch (\Throwable $th) {
    //throw $th;
    echo "error en conexion";
}