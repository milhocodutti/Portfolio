<?php include("doctype.php");?>

<div id="form_receta"><a href="menu_gastro.php"><div id="backBottom" class="boton">VOLVER</div></a>
<div id="form_receta"><a href="index.php"><div id="backBottom" class="boton">INICIO</div></a>
<div class="recetario">

<?php
    include("conexion.php");
    $ver_recetas= mysqli_query($conexion, "SELECT * FROM recetas" );

    while ($lista_recetas=mysqli_fetch_assoc($ver_recetas)){

    
    ?>

  <div id="verRecetas" class="recetario">
    <h4><?php echo $lista_recetas['nombre_receta'];?></h4>
    <h5>Organolepsia: <?php echo $lista_recetas['sabor'];?></h5>
    <h5>Tipo: <?php echo $lista_recetas['dieta_tipo'];?></h5>
    <p>Ingredientes:<br><?php echo $lista_recetas['ingredientes'];?></p>
    <p>Preparación:<br><?php echo $lista_recetas['preparacion'];?></p>
    <p>Descripción:<br><?php echo $lista_recetas['descripcion'];?></p>

    
  </div>
<?php
}

?>
</div>	


<?php include("enddoctype.php");?>