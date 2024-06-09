<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Listado de restaurantes por ciudad</title> 
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .container {
      margin-top: 20px;
    }
    .card-header {
      background-color: #454545;
      color: white;
    }
    .btn-primary {
      background-color: #454545;
      border-color: #454545;
    }
    .btn-primary:hover {
      background-color: #7b1fa2;
      border-color: #7b1fa2;
    }
    .btn-secondary {
      background-color: #ccc;
      border-color: #ccc;
    }
    .btn-secondary:hover {
      background-color: #bbb;
      border-color: #bbb;
    }
  </style>
</head> 
<body> 
<div class="container"> 
<section> 
<article> 
<?php  
include("../../conexion.php"); 
$link = conectarse(); 
$instruccion= "select restaurante.codrest, restaurante.nombre, restaurante.direccion, restaurante.correo,
restaurante.telefono, restaurante.resena, restaurante.fk_nomciudad
from restaurante";
?>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<center><h1>Listado de Resturantes</h1></center>
<div class="card">
  <div class="card-header">
    <h4>Restaurantes</h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
<table class="table table-striped">
  <thead> 
<tr> 
<th>Codigo</th> 
<th>Nombre</th> 
<th>Dirección</th> 
<th>Correo</th> 
<th>Telefono</th> 
<th>Reseña</th>
<th>Ciudad</th>
</tr>
  </thead>
  <tbody>
<?php 
$rs=mysqli_query($link, $instruccion) or die ("Fallo en la Consulta"); 
$n=mysqli_num_rows($rs); 
while($campo=mysqli_fetch_array($rs))
{
?>
<tr>
<td><?php echo $campo["codrest"];?></td>  
  <td><?php echo $campo["nombre"];?></td> 
  <td><?php echo $campo["direccion"];?></td>
  <td><?php echo $campo["correo"];?></td> 
  <td><?php echo $campo["telefono"];?></td> 
  <td><?php echo $campo["resena"];?></td>
  <td><?php echo $campo["fk_nomciudad"];?></td>
<?php
}
mysqli_close($link); 
?>
</tbody>
</table>
</div>
  </div>
</div> 
</article> 
</section> 
<a class="btn btn-warning btn-lg mt-3" href="./index.php">
  <i class="fas fa-arrow-left"></i> Volver</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div> 
</body> 
</html>