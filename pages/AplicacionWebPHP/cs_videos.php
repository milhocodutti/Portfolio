<?php include("doctype.php");?>

<div id="form_receta"><a href="index.php"><div id="backBottom" class="boton">INICIO</div></a>
<div id="videos_cs">


<?php 
$csv=array(array('titulo'=>'TTT','url'=>"videos/cs/ttt/ttt01.mp4"),array('titulo'=>'TTT','url'=>"videos/cs/ttt/ttt02.mp4"),array('titulo'=>'TTT','url'=>"videos/cs/ttt/ttt03.mp4"),array('titulo'=>'TTT','url'=>"videos/cs/ttt/ttt04.mp4"), array('titulo'=>'Fruta','url'=>"videos/cs/fruta/fruta01.mp4"),array('titulo'=>'Pool','url'=>"videos/cs/pool/pool01.mp4"));

for ($i=0; $i < count($csv); $i++) { ?><!--Se Abre y cierra php a conveniencia
        Se carga estructura de HTML + CSS-->

        <div id="cajaCSV">
            <h3><strong><?php echo $csv[$i]['titulo'];?></strong></h3>
            <video src="<?php echo $csv[$i]['url'];?>" controls autoplay muted loop width="300px"></video>
            
            
        </div>

    
    <?php 
    }
    
    ?>



</div>

<?php include("enddoctype.php");?>