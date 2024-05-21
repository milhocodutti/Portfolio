<?php

$sabor= $_POST['sabor'];
$dieta_tipo= $_POST['dieta_tipo'];
$ingredientes= $_POST['ingredientes'];
$preparacion= $_POST['preparacion'];
$descripcion= $_POST['descripcion'];
$imagen_receta=$_POST['imagen_receta'];
$nombre_receta=$_POST['nombre_receta'];

include ("conexion.php");


mysqli_query($conexion, "INSERT INTO recetas VALUES (DEFAULT, '$sabor', '$dieta_tipo', '$ingredientes', '$preparacion', '$descripcion','$imagen_receta', '$nombre_receta')");

header("Location: form_receta.php?carga_ok");
//mysqli_query($conexion, "INSERT INTO recetas VALUES (DEFAULT, '$sabor', '$dieta_tipo', '$ingredientes', '$preparacion', '$descripcion', '$nombre_receta')");
//mysqli_query($conexion, "INSERT INTO recetas VALUES (default, '$sabor', '$dieta_tipo', '$ingredientes', '$preparacion', '$descripcion', '$nombre_receta')");

//header("Location: form_receta.php?carga_ok");


?>