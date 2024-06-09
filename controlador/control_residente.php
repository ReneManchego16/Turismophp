<?php 
session_start(); 
include("../conexion.php"); 
//include("inc/fecha.php"); 
if ((isset($_POST['usuario'])) && (isset($_POST['password']))) { 
$usuario = $_POST['usuario']; 
$password = $_POST['password']; 
//$password = sha1(md5($_POST['passTxt']));
}
//var_dump($password);
$link = Conectarse(); 
$sql = "SELECT * FROM residente WHERE codresidente = '$usuario' AND contraseña = '$password'"; 
$rs = mysqli_query($link, $sql); 
$campo = mysqli_fetch_assoc($rs) or die ("fallo en la consulta, intente denuevo");
if (mysqli_num_rows($rs)>0){
header("Location: comprobacion_resi.php"); 
} else { 
header("Location: ../loginresidente.php?errorusuario=si");
}
mysqli_free_result($rs); 
//mysqli_close($link); 
?>