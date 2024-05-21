<?php 
if (imagetypes() & IMG_GIF){
    echo "<p style='color:green;'>Imagen Gif soportada</p>";
}    else{
    echo "<p style='color:red;'>imagen Gif no soportada</p>";
    }
if (imagetypes() & IMG_JPG){
        echo "<p style='color:green;'>Imagen Jpeg soportada</p>";
}    else{
        echo "<p style='color:red;'>imagen Jpeg no soportada</p>";
        }
    if (imagetypes() & IMG_PNG){
    echo "<p style='color:green;'>Imagen Png soportada</p>";
}    else{
    echo "<p style='color:red;'>imagen Png no soportada</p>";
    }

?>