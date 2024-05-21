<?php
//$servername = "localhost";
//$database = "id20343825_repositoriogeneral01";
//$username = "id20343825_milhocodutti";
//$password = "zOU_N}2}cUmnOHbX";

//$conexion = new mysqli($servername,$username,$password,$database);
///$conexion->set_charset("utf8");


$conexion=mysqli_connect("localhost", "root", "", "appalimentos") or exit ("No se puede conectar con la base de datos");
//mysqli_query($conexion, "INSERT INTO recetas VALUES (DEFAULT, '$sabor', '$dieta_tipo', '$ingredientes', '$preparacion', '$descripcion', '$nombre_receta')");

//header("Location: cargar.php?carga_ok")
 

?>