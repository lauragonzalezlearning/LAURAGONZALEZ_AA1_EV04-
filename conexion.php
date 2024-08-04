<?php

$localhost = "localhost";
$BaseDatos = "bdaprendiz";
$usuario = "root";
$password = "";
$password = "123456789";
try {
    //code...

    $conexion = new mysqli($localhost,$usuario,$password,$bdaprendiz);
    echo "conexion exitosa";

} catch (\Throwable $th) {
    //throw $th;
    echo "error en conexion";
}
