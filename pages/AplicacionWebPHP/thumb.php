<?php 
$src_img= imagecreatefromjpeg('imagenes/appweb/desayuno001.jpg');
$alto=150;//imagesy($src_img)/5; //se toma referencia de height
$ancho=150;//imagesx($src_img)/5; //se toma referencia de width
$img_dest = imagecreatetruecolor($ancho,$alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($img_dest, $src_img, 0,0,0,0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($img_dest, 'imagenes/appweb/desayuno001_thumb.jpg');
imagedestroy($img_dest);
?>
<?php 
$src_img= imagecreatefromjpeg('imagenes/appweb/franquicia001.jpg');
$alto=150;//imagesy($src_img)/5; //se toma referencia de height
$ancho=150;//imagesx($src_img)/5; //se toma referencia de width
$img_dest = imagecreatetruecolor($ancho,$alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($img_dest, $src_img, 0,0,0,0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($img_dest, 'imagenes/appweb/franquicia001_thumb.jpg');
imagedestroy($img_dest);
?>
<?php 
$src_img= imagecreatefromjpeg('imagenes/appweb/postre001.jpg');
$alto=150;//imagesy($src_img)/5; //se toma referencia de height
$ancho=150;//imagesx($src_img)/5; //se toma referencia de width
$img_dest = imagecreatetruecolor($ancho,$alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($img_dest, $src_img, 0,0,0,0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($img_dest, 'imagenes/appweb/postre001_thumb.jpg');
imagedestroy($img_dest);
?>
<?php 
$src_img= imagecreatefromjpeg('imagenes/appweb/sushi001.jpg');
$alto=150;//imagesy($src_img)/5; //se toma referencia de height
$ancho=150;//imagesx($src_img)/5; //se toma referencia de width
$img_dest = imagecreatetruecolor($ancho,$alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($img_dest, $src_img, 0,0,0,0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($img_dest, 'imagenes/appweb/sushi001_thumb.jpg');
imagedestroy($img_dest);
?>
