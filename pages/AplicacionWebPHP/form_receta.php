<?php include("doctype.php")?>
<div id="form_receta"><a href="menu_gastro.php"><div id="backBottom" class="boton">VOLVER</div></a>
<div id="form_receta"><a href="index.php"><div id="backBottom" class="boton">INICIO</div></a>
<div id="formContainer">


<form  action="funcion_carga_receta.php" method="POST">
        <label for="nombre_receta">Nombre</label>
        <input class="form-select" type="text" name="nombre_receta" required placeholder="Chipa, embeju...">

        <!--<label for="sabor">Sabor</label>
        <input type="text" name="sabor" placeholder="Salado, dulce...">-->

        <label for="sabor" >Organolepsia</label>
    <select class="form-select" name="sabor" >
      <option selected disabled value="">Elegir...</option>
      <option>Salado</option>
      <option>Dulce</option>
      <option>Ácido</option>
      <option>Amargo</option>
      <option>Umami</option>
      <option>Refrecante</option>
      <option>Astringente</option>
      <option>Adiposo</option>
      <option>Otro</option>
    </select>


        
        <!--<label for="dieta_tipo">Tipo de regimen dietario</label>
        <input type="text" name="dieta_tipo"  placeholder="Hipercalorica, vegetariana...">-->
        
        <label for="dieta_tipo" >Tipo de regimen dietario</label>
    <select class="form-select" name="dieta_tipo" >
      <option selected disabled value="">Elegir...</option>
      <option>Normal</option>
      <option>Hipocalórica</option>
      <option>Hipercalórica</option>
      <option>Protéica</option>
      <option>Keto/Cetogénica</option>
      <option>Gluten Free</option>
      <option>Vegetariano</option>
      <option>Vegano</option>
      <option>Ayuno Intermitente</option>
      <option>Alcalina</option>
      <option>Detox</option>
      <option>Light</option>
      <option>Zero</option>
      <option>Otro</option>

    </select>


        <label for="ingredientes">Ingredientes</label>
        <textarea name="ingredientes" id="" cols="30" rows="10" required placeholder="Agua, sal..."></textarea>

       

        <label for="preparacion">Preparación</label>
        <textarea name="preparacion" id="" cols="30" rows="10" required placeholder="Metodo y coccion..."></textarea>

        
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10" required placeholder="Alimento solido, de gusto caracterisitico..."></textarea>

        <!--<label for="imagen_receta">Cargar imagen</label>
        <input type="text" name="imagen_receta"  placeholder="arrastre su imagen aqui">-->
        
        <input class="boton" type="submit">
    </form>

	<!-- Confirmamos carga-->
	<?php 
	if (isset($_GET ['carga_ok'])){
		echo "<p>Receta cargada</p>";
	
	}

	?>

	
    </div>
    <?php include("enddoctype.php")?>