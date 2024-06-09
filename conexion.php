<?php 
function conectarse()
{
if(!($link = mysqli_connect("5432", "turismoapp_user","45gyOpGctlkoqt81n8dY2OFnmOTFBWaH", "turismoapp")))
{
    echo"error conectando a la base de datos."; 
    exit();
}
return $link;
}
?>