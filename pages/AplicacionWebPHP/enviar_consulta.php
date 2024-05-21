<?php include("doctype.php")?>
<div id="form_receta"><a href="index.php"><div id="backBottom" class="boton">INICIO</div></a>
<div id="formConsultas">
    <H3>Envianos tu consulta</H3>
    <form action="funcion_consulta.php" method="POST">
    <label for="nombre">Nombre</label>
    <input class="form-select" type="text" name="nombre" required placeholder="Juan, Pedro...">
    <form action="funcion_consulta.php" method="POST">
    <label for="apellido">Apellido</label>
    <input class="form-select" type="text" name="apellido" required placeholder="Perez, Gomez...">
    <form action="funcion_consulta.php" method="POST">
    <label for="nombre">Correo Electronico</label>
    <input class="form-select" type="email" name="correo" required placeholder="perezjuan@gmail.com...">
    <label for="descripcion">Consulta</label>
        <textarea name="consulta" id="" cols="30" rows="10" required placeholder="Escriba su consulta..."></textarea>
        <input class="boton" type="submit">
    </form>

	<?php 
	if (isset($_GET ['consulta_enviadaOK'])){
		echo "<p>Consulta enviada</p>";
	
	}

	?>

</div>



<?php include("enddoctype.php")?>