<?php

$nombre_consulta= $_POST['nombre'];
$apellido_consulta= $_POST['apellido'];
$correo_consulta= $_POST['correo'];
$consulta_consulta= $_POST['consulta'];


$cuerpo= ("Nombre: ".$nombre_consulta."\r\n"."Apellido: ".$apellido_consulta."\r\n"."Correo: ".$correo_consulta."\r\n"."Consulta: ".$consulta_consulta);



mail("repositoriogeneral01@gmail.com", "Consulta desde pagina web", $cuerpo);

header("Location: enviar_consulta.php?consulta_enviadaOK");


?>